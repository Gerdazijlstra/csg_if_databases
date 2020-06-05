<?php

session_start();

$host="localhost";
$user="username";
$password="password";
$db="Bakkenenco";
$wachtwoordonjuist=false;

$dbverbinding=mysqli_connect("localhost","username","password",$db);

    //  if (!$dbverbinding) {
        // Geef de foutmelding die de server teruggeeft en stop met de uitvoer van PHP (die)
      //  echo '<p>jo verbinding mislukt</p>';
      //  die("Verbinding mislukt: " . mysqli_connect_error());
    //  }
      

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['Gebruikersnaam'])){
    
    $uname=$_POST['Gebruikersnaam'];
    $password=$_POST['wachtw'];
    
    $sql="select * from login where leerlingnummer='".$uname."'AND wachtwoord='".$password."'LIMIT 1"; 
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        $_SESSION["USER_ID"]= "$uname";
        header("Location: primacantina.php");
        exit();
    }
    else{
        $wachtwoordonjuist=true;
        
    }
    
} 
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
            <div id= "midden"> 

                  
           </div>
            <div id= "footer">
            </div>
        </div>
        <div id= "menu"> 
            <a href="index.php">home</a>
            <a href="recepten.php">recepten</a>
            <a href="inloggen.php">inloggen</a>
        </div>
        <div id= "midden"> 
        </div>
        <div id= "footer">
        </div>
    </body>
</html>