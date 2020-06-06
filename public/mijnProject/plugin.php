<?php
$functie = array('Recept');

if(isset($_GET['actie']) && (in_array($_GET['actie'],$functie))){
    echo 'oke';
}else{
    echo 'Sorry, deze functie is niet gevonden';
}
?>