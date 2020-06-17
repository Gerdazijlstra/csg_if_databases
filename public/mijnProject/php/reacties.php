<?php
session_start();
require('php/databese.php');
$ingelogd = $_SESSION["log"];
if ($ingelogd == 1) {
    ?>
    <div id="reactie">
        <h3>reacties</h3>
    <?php

    $sql = "SELECT * FROM Reactie WHERE  reactieReceptId='$nummer' ";
    $records = mysqli_query($DBverbinding, $sql);
    if(mysqli_num_rows($records)>0){
        while($row = mysqli_fetch_array($records)){
            echo "op " . $row["reactieDatum"]. " zei " . $row["reactieGebruikerId"].":  <br>" . $row["reactieInfo"]."<br><br>" ;

            
}
}

else {
    echo '<h4> er zijn hier nog geen reacties geplaatst. <h4> ';
}
}
else {
    echo '<h4> u moet inloggen als u de reacties wilt zien.';
}
?>
</div>
