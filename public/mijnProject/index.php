<?php
error_reporting(E_ALL & ~E_NOTICE);
require('php/database.php');

//maak databaseverbinding met de gegevens uit database.php
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);
// Controleer de verbinding
if (!$DBverbinding) {
// Geef de foutmelding die de server teruggeeft en stop met de uitvoer van PHP (die)
die("Verbinding mislukt: " . mysqli_connect_error());
}
else {
// Dit gedeelte laat je normaliter weg, maar is hier ter illustratie toegevoegd
echo '<i>verbinding database succesvol</i>';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>recepten</title><link rel="stylesheet" href="opmaak.css" type="text/css">
</head>
<body>

<div id= "header"> 
//bovenste balkje//
<div id="h1"> 

 </div>
<div id="h2"> 
<h1> bakken & co </h1>
<br>
<h2> bakken doe je zo!</h2>
</div>
<div id="h3"> </div>

</div>
<div id= "topnav"> 

</div>
<div id= "container"> 
<p> Hoi allemaal! bij bakken & co laten wij je verschillende recepten zien die je kan maken. Vergeet niet om een account aan te maken, zo kan je zelf ook recepten delen. Veel bakplezier!</p>
</div>
<div id= "footer">

 </div>
</body>
</html>