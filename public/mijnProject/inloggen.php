<?php
require('php/begin.php');
include('db.php');
session_start();

    
if (isset($_POST['Gebruikersnaam'])){
    $Gebruikersnaam = $_POST['Gebruikersnaam'];
    $Wachtwoord = $_POST['Wachtwoord'];
    $hash = hash('sha384',$Wachtwoord);
    $sql = "SELECT * FROM Gebruikers WHERE Gebruikersnaam ='".$Gebruikersnaam."' AND Wachtwoord = '".$hash."'";
    $records= mysqli_query($DBverbinding, $sql);
    if (mysqli_num_rows($records)== 1) {
        $_SESSION["user"] = "$Gebruikersnaam";
        $_SESSION["melding"] = "U bent ingelogd met {$SESSION["user"]} .";
        $_SESSION["alert"] = 1;
    }
    else {
        $_SESSION["melding"] = "Het is niet gelukt om in te loggen. Probeer het nog een keer.";
        $_SESSION["alert"] = 0;
    }
require('php/eind.php');
}
?>

                        