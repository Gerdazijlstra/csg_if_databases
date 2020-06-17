<?php
    $servernaam = "localhost";
    $Gebruikersnaam = 'username';
    $Wachtwoord = 'password';
    $database = 'Bakkenenco';
    $DBverbinding = mysqli_connect($servernaam, $Gebruikersnaam, $Wachtwoord, $database);
    $mysqli = new mysqli($localhost, $Gebruikersnaam, $Wachtwoord, $Bakkenenco);
?>