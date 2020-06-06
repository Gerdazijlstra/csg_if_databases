<?php
$functie = array('Recept');

if(isset($_GET['actie']) && (in_array($_GET['actie'],$functie))){
    echo 'oke';
}
?>