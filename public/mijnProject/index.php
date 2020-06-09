<?php 
session_start();
include('mijnProject/db.php');
?>
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
             <img src="logoo.png" alt="logo" height="100%" style="margin: auto" > 

            </div>
            <div id= "menu"> 
                <a href="index.php">home</a>
                <a href="recepten.php">recepten</a>
                <a href="inloggen.php">inloggen</a>
            </div>
            <div id= "midden"> 

                <div class="container">
                    <img src="achtergrond1.JPG" alt="bla" style="width:100%;">

                    <div class="centered">Welkom op Bakken & Co!</div>
                    <p>Op deze bakwebsite kun je allemaal recepten vinden die je kunt uitproberen. Laat je inspireren door de lekkere baksels van Bakken & Co!</p>
                   
                </div>  
                <section id="content">
                    <?php 
                        if (isset($_GET['module']) && ($_GET['module'] == 'inloggen')){
                            include ('mijnProject/inloggen.php');
                        }
                        else{
                            include ('mijnProject/plugin.php');
                        }
                    ?>
                </section>
            </div>
            <div id= "footer">
                <p>&copy; 2020 - Website van Dianne en Gerda</p>
            </div>
        </div>    
    </body>
</html>