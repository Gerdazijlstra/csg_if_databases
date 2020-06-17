<?php
    session_start();
    require('php/begin.php');
    echo "<h3>".$_SESSION["melding"]. "</h3>";
?>
<br>
<a href="logout.php">klik hier om uit te loggen</a>
<br><br>
<?php
    require('php/eind.php');
?>