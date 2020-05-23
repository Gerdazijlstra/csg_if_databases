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
    
<form> action="inloggen.php" method="get">
       <input type="text" name="Gebruikersnaam">
       <input type="text" name="Wachtwoord">
        <input type="submit">
</form>
    <?php
}
?>