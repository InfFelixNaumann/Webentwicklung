<?php
include("dbcon.php");

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css"/>    
    <title>Titel</title>
    <meta name="description" content="Beschreibung">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="main.css">
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script type='text/javascript' src="jquery-3.4.1.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.js"></script>
</head>
<body>
    <main>
<div class="row">
<?php    
$rollen_sql = " SELECT * FROM tb_tabelle order by id ASC";
$rollen_res = mysqli_query($con_this, $rollen_sql) or die(mysqli_error($con_this));
while(list($name, $datum, $ort, $rolle, $img,$id) = mysqli_fetch_row($rollen_res)){
    echo "<div class='col-sm-4'>";
    echo "<div class='card' style='width: 18rem;'>";
    echo "<img class='card-img-top' src='$img'>";
    echo "<div class='card-body'>";
    echo "<div>$name</h5>";
    echo "<p class='card-text'>".$datum."<br> $ort <br> $rolle</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

?>
</div>
<br><br>
    <a href='index.php'><button class="btn btn-info" style="margin-left:10px;">Zurück</button></a>
    </main>
    <footer>
    </footer>
</body>
</html>