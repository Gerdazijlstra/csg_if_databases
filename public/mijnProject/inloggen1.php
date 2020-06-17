<?php
$servernaam = "localhost";
$Gebruikersnaam = 'username';
$Wachtwoord = 'password';
$database = 'Bakkenenco';
$DBverbinding = mysqli_connect($servernaam, $Gebruikersnaam, $Wachtwoord, $database);
$mysqli = new mysqli($localhost, $Gebruikersnaam, $Wachtwoord, $Bakkenenco);

session_start();
if (isset($_POST['naam'])) {
    $naam = $_POST['naam'];
    $woord = $_POST['woord'];
    // $hash = hash('sha512',$woord);
    $sql = "SELECT Gebruikersnaam, Wachtwoord FROM Gebruikers WHERE Gebruikersnaam='".$naam."' AND Wachtwoord='".$woord."'";
    $records = mysqli_query($DBverbinding, $sql);
    if (mysqli_num_rows($records) == 1) {
        $_SESSION["user"] = "$naam";
        $_SESSION["melding"] = "U bent ingelogd met {$_SESSION["user"]}.";
        header("Location: uitlog.php");
        $_session["log"] = "ingelogd";
    }
    else {
        $_SESSION["melding"] = "Het is niet gelukt om in te loggen. Probeer het opnieuw.";
        header("Location: inlog.php");
        $_session["log"] = "uigelogd";
        
    }
}
?>    
