<?php
    require('php/begin.php');
    $naam = $_GET["gebruikersnaam"];
    $woord = $_GET["wachtwoord"];
    $ingelogd = 0 ;

    if (empty($naam) && empty($woord)) {
        echo 'log in';
        }
        else {
            if ($naam == 'hoi'&& $woord == 'doei') {
                echo 'u bent ingelogd';
                $ingelogd = 1;
            } else {
                echo 'uw gebruikersnaam of wachtwoord is niet goed, probeer het nog eens';
            }
        }

    if ($ingelogd== '1') {
        header("Location: ../mijnProject/index.php");
}
else {
?>
<form action="inloggen1.php" method="get">
    gebruikersnaam: <input type="text" name="gebruikersnaam">
    <br>
    wachtwoord: <input type="password" name="wachtwoord">
    <br>
    <input type="submit" value="inloggen    " >
</form>
<br>

<?php
}
    require('php/eind.php');
?>