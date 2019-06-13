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
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="main.css">
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script type='text/javascript' src="jquery-3.4.1.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.js"></script>
</head>
<body>
    <input type='hidden' name='auswahl' id='auswahl' value=''>
    <main>
        <form class="col-md-4" action='ablegen.php' method="Post" enctype="multipart/form-data">
            <input name="name" class="form-control input-md" placeholder="Name" value='' style="margin: 10px 0;" required/>
            <input name="datum" type="date" class="form-control input-md" placeholder="Datum" value='' style="margin-bottom: 10px;"  required/>
            <input name="ort" class="form-control input-md"  placeholder="Ort" value='' style="margin-bottom: 10px;"  required/>
            <input name="rolle" class="form-control input-md" placeholder="Rolle" value='' style="margin-bottom: 10px;"  required/>
            <input name='fileToUpload' type="file" id="fileToUpload" class="file-upload" value='' style="margin-bottom: 20px;"  required/><br/>
            <input type="submit" value='Absenden'name='submit'>
            <button type="reset" id="reset">Zurücksetzen</button>
        </form>
        <br>
        <?php
        $rollen_sql = " SELECT * FROM tb_tabelle order by id ASC";
        $rollen_res = mysqli_query($con_this, $rollen_sql) or die(mysqli_error($con_this));
        if(mysqli_num_rows($rollen_res)> 0){
            echo "<a href='view.php'><button class='btn btn-success' style='margin-left:10px;'>Vorandenen Einträge Anzeigen</button></a>";
        }
        ?>
    </main>
</body>
</html>