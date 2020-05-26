<!DOCTYPE html>
<html>
    <head>
        <title>Bakken & co</title>
        <link rel="stylesheet" type="text/css" href="css/design.css">
        <title>recepten</title><link rel="stylesheet" href="design.css" type="text/css">
    </head>
    <body>
        <div id= "header"> 
            <div id="h1"> 
            </div>
            <div id="h2"> 
                <h1> bakken & co </h1>
                <h3> bakken doe je zo!</h3>
            </div>
            <div id="h3"> 
            </div>
        </div>
        <div id= "menu"> 
            <a href="index.php">home</a>
            <a href="recepten.php">recepten</a>
            <a href="inloggen.php">inloggen</a>
        </div>
        <div id= "midden"> 
<?php
if (isset($_SEESION{'Inloggen'})){
echo 'Welkom op Bakken & co!';
}
else{
    echo 'Inloggen';
    if(isset($_POST['submit'])){
       echo 'hoii' ;
    }
}
?>
<form> 
<table width="100%" border="0" cellspacing="5" cellpadding="0" >
<tr>
<td width="100">Gebruikersnaam:</td>
<td><input type="text" name="User" size="15" required="required" />
</tr>
<tr>
<td>Wachtwoord:</td>
<td><input type="password" name="Pass" size="15" required="required" />
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Inloggen" /></td>
</tr>
</table></form>
                             

         
        </div>
        <div id= "footer">
        </div>
    </body>
</html>