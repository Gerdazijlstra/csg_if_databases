<?php
$check = $check.'db.php geladen.<br>';
$servernaam = "localhost";
$Gebruikersnaam = 'username';
$Wachtwoord = 'password';
$host = 'localhost';
$database = 'Bakkenenco';
$DBverbinding = mysqli_connect($localhost, $Gebruikersnaam, $Wachtwoord, $Bakkenenco);
$mysqli = new mysqli($localhost, $Gebruikersnaam, $Wachtwoord, $Bakkenenco);

if (!$DBverbinding) {
    die("connectie database mislukt: " . mysqli_connect_error());
}
else {
    $check = $check.'connectie database gelukt.<br>';
}

?>
