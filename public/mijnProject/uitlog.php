<?php
session_start();
require('php/begin.php');
echo $_SESSION["melding"];
echo $_SESSION["log"];
?>


<?php
require('php/eind.php');
?>