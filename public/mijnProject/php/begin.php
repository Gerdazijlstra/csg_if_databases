<!DOCTYPE html>
<html>
    <head>
        
        <title>Bakken & co</title>
        <link rel="stylesheet" type="text/css" href="css/design.css">
        <title>recepten</title><link rel="stylesheet" href="design.css" type="text/css">
    </head>
    <body>
        <div id="center">
            <div id= "header"> 
             <img src="pics/logoo.png" alt="logo" height="100%" style="margin: auto" > 

            </div>
            <div id= "menu"> 
                <a href="index.php">home</a>
                <a href="recepten.php">recepten</a>
                <?php
                session_start();
                $ingelogd = $_SESSION["log"];
                if ($ingelogd == 1) {
                    ?>
                   <a href="uitlog.php">uitloggen</a>
                   <?php
                } 
                else {
                    ?>
                   <a href="inlog.php">inloggen</a>
                   <?php
                }
                ?>
                
            </div>
            <div id= "midden">