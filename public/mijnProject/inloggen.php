<!DOCTYPE html>
<html>
    <head>
        <title>Bakken & co</title>
        <link rel="stylesheet" type="text/css" href="css/design.css">
        <title>recepten</title><link rel="stylesheet" href="design.css" type="text/css">
    </head>
    <body>
        <div id="center">
            <div id= "header"> 
             <img src="logo1.jpg" alt="logo" height="100%" style="margin: auto" > 

            </div>
            <div id= "menu"> 
                <a href="index.php">home</a>
                <a href="recepten.php">recepten</a>
                <a href="inloggen.php">inloggen</a>
            </div>
            <div id= "midden"> 
               <?php


if (isset($_SESSION['Inloggen'])){
    echo '<h1>Welkom op bakken & co!</h1>';
}else{

    
    if (isset($_POST['submit'])){
            $sqlUitlezen = mysqli_query($MySQL, "SELECT * FROM `Gebruikers` WHERE `Gebruikersnaam` = '".$_POST['User']."' AND `Wachtwoord` = '".$_POST['Pass']."'");
            $sqlAantal = mysqli_num_rows($sqlUitlezen);
                    
            if ($sqlAantal == 1){
                $sqlData = mysqli_fetch_assoc($sqlUitlezen);
                
                $_SESSION['Inloggen'] = $sqlData['Gebruikers'];
                echo 'het werkt'
            }else{
                echo 'Sorry, deze gegevens ken ik niet';
            }
    }
    
    ?>
        <form method="post" action="#">
         <table width="100%" border="0" cellspacing="5" cellpadding="0">
         <tr>
          <td width="100">Gebruikersnaam:</td>
          <td><input type="text" name="User" size="15" required="required" /></td>
         </tr>
         <tr>
          <td>Wachtwoord:</td>
          <td><input type="password" name="Pass" size="15" required="required" /></td>
         </tr>
         <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" value="Login" /></td>
         </tr>
        </table></form>
    <?php
}
?>
                  
           </div>
            <div id= "footer">
            </div>
        </div>
        <div id= "menu"> 
            <a href="index.php">home</a>
            <a href="recepten.php">recepten</a>
            <a href="inloggen.php">inloggen</a>
        </div>
        <div id= "midden"> 
        </div>
        <div id= "footer">
        </div>
    </body>
</html>
