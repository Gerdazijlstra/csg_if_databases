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
   <img src="achtergrond.JPG" alt="cupcake" width="100%" height="100%">  
        <div id="center">
            <div id= "header"> 
             <img src="logo1.jpg" alt="logo" height="100%" style="margin: auto" > 

            </div>
            <div id= "menu"> 
                <a href="index.php">home</a>
                <a href="recepten.php">recepten</a>
                <a href="inloggen.php">inloggen</a>
            </div>

            <div id= "midden"> 
    
            <div id= "midden2"> 

            <img src="Macarons.JPG" alt="cupcake" width="100%" height="40%">   

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
            <br>
            <br>
            <p>&copy; 2020 - Website van Dianne en Gerda</p>
            </div>
        </div>    
    </body>
</html>