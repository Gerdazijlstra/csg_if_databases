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
             <img src="logo1.jpg" alt="logo" height="100%" style="margin: auto" > 

            </div>
            <div id= "menu"> 
                <a href="index.php">home</a>
                <a href="recepten.php">recepten</a>
                <a href="inloggen.php">inloggen</a>
            </div>
            <div id= "midden2"> 
            <img src="cake2.jpg" alt="cake" width="100%" height="40%">
            <img src="cookies.jpg" alt="cake" width="100%" >    
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