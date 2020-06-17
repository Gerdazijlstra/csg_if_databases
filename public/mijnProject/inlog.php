<?php
session_start();
require('php/begin.php');
echo $_SESSION["melding"];
?>



<h2>Formulier</h2>
    <form method="POST" class="form-inline" action="inloggen1.php">
        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="gebruikersnaam" id="naam" name="naam">
        <input type="password" class="form-control mb-2 mr-sm-2" placeholder="wachtwoord" id="woord" name="woord">
        <button type="submit" class="btn btn-secondary mb-2">Login</button>
    </form>
<br

<?php
require('php/eind.php');
?>