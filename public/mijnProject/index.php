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
<<<<<<< HEAD
            <div id= "midden"> 
            <img src="cake2.jpg" alt="cake" width="100%" height="40%">
=======
            <div id= "midden2"> 
<<<<<<< HEAD
            <img src="Cupcakeplaatje.jpg" alt="cupcake" width="100%" height="40%">
>>>>>>> 373dd25ee15da8f10bc202c12fc918fd33df7dcc
            <img src="cookies.jpg" alt="cake" width="100%" >    
=======
            <img src="Cupcakeplaatje.jpg" alt="cupcake" width="100%" height="40%">   
>>>>>>> f4f1971733e3e2383de7d3f8a5a0254c291821d6
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