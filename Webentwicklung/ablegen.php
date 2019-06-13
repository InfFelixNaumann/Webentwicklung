<?php
include("dbcon.php");
$name = $_POST['name'];
$datum = $_POST['datum'];
$ort = $_POST['ort'];
$rolle = $_POST['rolle'];

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Upload fehlgeschlagen";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Datei könnte nicht hochgeladen werden";
    }
}

if($uploadOk == 1){

	$insert_sql = " INSERT INTO tb_tabelle(name, datum, ort, rolle, Bild) VALUES ('$name', '$datum', '$ort', '$rolle', 'upload/".basename( $_FILES["fileToUpload"]["name"])."') ";
	if(!mysqli_query($con_this, $insert_sql)){
		echo "$insert_sql<br>".mysqli_error($con_this);
	}else{
		header('Location: index.php');
	}

}

?>