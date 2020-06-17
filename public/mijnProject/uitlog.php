<?php
session_start();
require('php/begin.php');
echo "<a>".$_SESSION["melding"]. "</a>";
?>
<br><br>
<a href="logout.php">klik hier om uit te loggen</a>
<br><br>
<?php
require('php/eind.php');
?>