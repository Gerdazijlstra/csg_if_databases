<?php
session_start();
require('php/databese.php');
$ingelogd = $_SESSION["log"];
if ($ingelogd == 1) {
?>


<div id="reactie">
<h3>reacties</h3>

</div>
<?php
}
?>