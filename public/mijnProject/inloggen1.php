<?php
$servernaam = "localhost";
$Gebruikersnaam = 'username';
$Wachtwoord = 'password';
$database = 'Bakkenenco';
$DBverbinding = mysqli_connect($servernaam, $Gebruikersnaam, $Wachtwoord, $database);
$mysqli = new mysqli($localhost, $Gebruikersnaam, $Wachtwoord, $Bakkenenco);

    
require('php/begin.php');
session_start();

    $naam = $_GET["gebruikersnaam"];
    $woord = $_GET["wachtwoord"];
    $sql = "SELECT * FROM Gebruikers WHERE Gebruikersnaam='".$gebr."' AND Wachtwoord='".$pass."'";
    $records = mysqli_query($DBverbinding, $sql);
    $ingelogd = 0 ;
    if ($naam == $gebr && $woord == $pass){
        echo 'u bent ingelogd';
        $ingelogd = 1;
    } 
    else {
        echo 'uw gebruikersnaam of wachtwoord is niet goed, probeer het nog eens';
    }
    if ($ingelogd== '1') {
        
    }
    else {
        ?>
        <form action="inloggen1.php" method="post">
            gebruikersnaam: <input type="text" name="gebruikersnaam">
            <br>
            wachtwoord: <input type="password" name="wachtwoord">
            <br>
            <input type="submit" value="inloggen    " >
        </form>
        <br>
        <?php
    }






?>

<form action="inloggen1.php" method="post">
    gebruikersnaam: <input type="text" name="gebruikersnaam">
    <br>
    wachtwoord: <input type="password" name="wachtwoord">
    <br>
    <input type="submit" value="inloggen    " >
</form>
<br>

<?php
    require('php/eind.php');
?>