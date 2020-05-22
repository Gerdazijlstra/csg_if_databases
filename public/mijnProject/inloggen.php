<?php
if(isset($_SEESION['inloggen'])){
echo 'Welkom';
}
else{
    echo 'Inloggen';

    if(isset($_POST['submit'])){
        //sql
    }
    ?>
    //formulier
<form>
</form>
    <?php
}
?>