<?php
session_start();
require('php/databese.php');
$ingelogd = $_SESSION["log"];
if ($ingelogd == 1) {
$sql = "SELECT * FROM Recept WHERE  receptId='$nummer' ";
$records = mysqli_query($DBverbinding, $sql);
if(mysqli_num_rows($records)>0){
echo 'reacties';
while($row = mysqli_fetch_assoc($records)) {
    echo "gebruiker: " . $row["reactieGebruikerId"]. " - reactie: " . $row["reactieInfo"]. " " . $row["reactieDatum"]. "<br>";
}}


?>


<div id="reactie">
<h3>reacties</h3>

</div>
<?php
}
?>