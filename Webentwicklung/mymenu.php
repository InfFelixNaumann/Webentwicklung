<?php
//mymenu
if(isset($_GET['auswahl'])) $auswahl = $_GET['auswahl'];
else $auswahl = "";
$item = "test";
echo '<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <!--<script src="js/popper.js"></script>-->
    <script src="js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
</head>';
    //while(){
        if($auswahl == $item){
            echo "<li class='nav-item active'>";
        }else {
            echo "<li class='nav-item'>";
        }
        echo "<a class='nav-link' href='view.php?auswahl=test'>testenas </a>";
        echo "</li>";
    //}



?>