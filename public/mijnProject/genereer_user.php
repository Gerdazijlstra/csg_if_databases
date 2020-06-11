<?php
$naam ='Vincent';
$naam = utf8_encode($naam);
$email = 'vnv@csg.nl';
$wachtwoord= 'Groningen';

$hash+ hash('sha384',$wachtwoord);

$sql="INSERT INTO 'Gebruikers' ('Nummer','Naam','Gebruikersnaam','Wachtwoord') VALUES (NULL,'$Naam','$Gebruikersnaam','$hash');";
mysqli_query($DBverbinding, $sql);
?>