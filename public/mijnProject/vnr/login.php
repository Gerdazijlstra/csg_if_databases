<?php
$servernaam = "localhost";
$Gebruikersnaam = 'username';
$Wachtwoord = 'password';
$database = 'Bakkenenco';
$DBverbinding = mysqli_connect($servernaam, $Gebruikersnaam, $Wachtwoord, $database);
$mysqli = new mysqli($localhost, $Gebruikersnaam, $Wachtwoord, $Bakkenenco);


session_start();
if (isset($_POST['naam'])) {
    $gebr = $_POST['naam'];
    $pass = $_POST['pass'];
    // $hash = hash('sha512',$pass);
    $sql = "SELECT * FROM Gebruikers WHERE Gerbruikersnaam='".$gebr."' AND Wachtwoord='".$pass."'";
    $records = mysqli_query($DBverbinding, $sql);
    if (mysqli_num_rows($records) == 1) {
        $_SESSION["user"] = "$gebr";
        $_SESSION["melding"] = "U bent ingelogd met {$_SESSION["user"]}.";
        header("Location: prive.php");
    }
    else {
        $_SESSION["melding"] = "Het is niet gelukt om in te loggen. Probeer het opnieuw.";
        header("Location: index.php");
    }
}
?>