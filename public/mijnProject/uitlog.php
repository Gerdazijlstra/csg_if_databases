<?php
session_start();
require('php/begin.php');
echo $_SESSION["melding"];
?>
<br><br>
<a href="logout.php">uitloggen</a>
<br><br>
<?php
require('php/eind.php');
?>