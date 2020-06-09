<?php
require('php/begin.php');
?> 
               <?php
                    if (isset($_SESSION['Inloggen'])){
                        echo '<h1>Welkom op bakken & co!</h1>';
                    }
                    else{
                        if (isset($_POST['submit'])){
                                $sqlUitlezen = mysqli_query($MySQL, "SELECT * FROM `Gebruikers` WHERE `Gebruikersnaam` = '".$_POST['User']."' AND `Wachtwoord` = '".$_POST['Pass']."'");
                                $sqlAantal = mysqli_num_rows($sqlUitlezen);
                                        
                                if ($sqlAantal == 1){
                                    $sqlData = mysqli_fetch_assoc($sqlUitlezen);
                                    
                                    $_SESSION['Inloggen'] = $sqlData['Gebruikers'];
                                }
                                else{
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
<?php
require('php/eind.php');
?>