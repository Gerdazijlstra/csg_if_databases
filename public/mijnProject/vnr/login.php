<?php
$servernaam = "localhost";
$Gebruikersnaam = 'username';
$Wachtwoord = 'password';
$database = 'Bakkenenco';
$DBverbinding = mysqli_connect($servernaam, $Gebruikersnaam, $Wachtwoord, $database);
$mysqli = new mysqli($localhost, $Gebruikersnaam, $Wachtwoord, $Bakkenenco);

session_start();
if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    // $hash = hash('sha512',$pass);
    $sql = "SELECT * FROM VNR WHERE Email='".$mail."' AND Wachtwoord='".$pass."'";
    $records = mysqli_query($DBverbinding, $sql);
    if (mysqli_num_rows($records) == 1) {
        $_SESSION["user"] = "$mail";
        $_SESSION["melding"] = "U bent ingelogd met {$_SESSION["user"]}.";
        header("Location: prive.php");
    }
    else {
        $_SESSION["melding"] = "Het is niet gelukt om in te loggen. Probeer het opnieuw.";
        header("Location: index.php");
    }
}
?>