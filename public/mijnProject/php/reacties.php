<?php
session_start();
require('php/databese.php');
$ingelogd = $_SESSION["log"];
if ($ingelogd == 1) {
$sql = "SELECT * FROM Recept WHERE  receptId='$nummer' ";
$records = mysqli_query($DBverbinding, $sql);
if(mysqli_num_rows($records)>0){
echo 'hoi';
}


?>


<div id="reactie">
<h3>reacties</h3>

</div>
<?php
}
?>