<?php
require('php/begin.php');
?>
<form action="inloggen1.php" method="get">
    gebruikersnaam: <input type="text" name="gebruikersnaam">
    <br>
    wachtwoord: <input type="text" name="wachtwoord">
    <br>
    <input type="submit">
</form>
<br>

<?php
    $naam = $_GET["gebruikersnaam"];
    $woord = $_GET["wachtwoord"];

    if ($naam == 'hoi'&& $woord == 'doei') {
        echo 'u bent ingelogd';
    } else {
        echo 'u bent niet ingelogd';
    }

    require('php/eind.php');
?>