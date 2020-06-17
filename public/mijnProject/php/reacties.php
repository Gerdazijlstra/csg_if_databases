<?php
    session_start();
    require('php/databese.php');
    $ingelogd = $_SESSION["log"];
    if ($ingelogd == 1) {
        $sql = "SELECT * FROM Reactie,Gebruikers WHERE  reactieReceptId='$nummer' AND  nummer=reactieGebruikerId ORDER BY reactieDatum ASC";
        $records = mysqli_query($DBverbinding, $sql);
        if(mysqli_num_rows($records)>0){
            while($row = mysqli_fetch_array($records)){
                echo "Op " . $row["reactieDatum"]. " zei " . $row["Naam"].":  <br>" . $row["reactieInfo"]."<br><br>" ;
            }
        }
        else {
        echo ' er zijn hier nog geen reacties geplaatst.<br><br>';
        }
    }
    else {
        echo ' u moet inloggen als u de reacties wilt zien.<br><br>';
    }
?>
