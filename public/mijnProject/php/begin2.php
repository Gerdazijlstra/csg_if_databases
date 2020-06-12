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
                if ($ingelogd == '1') {
                    ?>
                   <a href="uitloggen.php">uitloggen</a>
                   <?php
                } else {
                    ?>
                   <a href="vnr/index.php">inloggen</a>
                   <?php
                }
                
                ?>
                
            </div>
            <div id= "midden2">