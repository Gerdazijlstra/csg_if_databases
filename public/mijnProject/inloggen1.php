<?php
require('php/begin.php');
?>
<form action="inloggen1.php" method="get">
    gebruikersnaam: <input type="text" name="gebruikersnaam">
    <br>
    wachtwoord: <input type="text" name="wachtwoord">
    <br>
    <input type="submit" >
</form>
<br>

<?php
    $naam = $_GET["gebruikersnaam"];
    $woord = $_GET["wachtwoord"];
    $ingelogd ;

    if (empty($naam) && empty($woord)) {
     echo 'log in';
    }
    else {
        if ($naam == 'hoi'&& $woord == 'doei') {
            echo 'u bent ingelogd';
        } else {
            echo 'uw gebruikersnaam of wachtwoord is niet goed, probeer nog eens';
        };
    };

    require('php/eind.php');
?>