<?php
    session_start();
    require('php/begin.php');
    echo "<h4>".$_SESSION["melding"]. "</h4>";
?>
<br><br>
<a href="logout.php">klik hier om uit te loggen</a>
<br><br>
<?php
    require('php/eind.php');
?>