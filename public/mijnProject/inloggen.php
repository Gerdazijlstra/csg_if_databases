<?php
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> Login Form</title>
</head>
<body>
    <form method="post" action="validate_login.php" >
        <table >
            <tr>
                <td><label for="Gebruikersnaam">Gebruikersnaam</label></td>
                <td><input type="text" 

                  name="Gebruikersnaam" id="Gebruikersnaam"></td>
            </tr>
            <tr>
                <td><label for="Wachtwoord">Wachtwoord</label></td>
                <td><input name="Wachtwoord" 

                  type="password" id="Wachtwoord"></input></td>
            </tr>
            <tr>
                <td><input type="submit" value="Inloggen"/>
                <td><input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

// Grab User submitted information
$Gebruikersnaam = $_POST["Gebruikersnaam"];
$Wachtwoord = $_POST["Wachtwoord"];

// Connect to the database
$con = mysqli_connect("localhost","username","password");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error($link));
}

// Select the database to use
mysqli_select_db("Bakkenenco",$con);

$result = mysqli_query($MySQL,"SELECT Gebruikersnaam, Wachtwoord FROM Gebruikers WHERE $Gebruikersnaam = Gebruikersnaam");

$row = mysqli_fetch_array($result);

if($row["Gebruikersnaam"]==$Gebruikersnaam && $row["Wachtwoord"]==$Wachtwoord)
    echo"yej hij doet het";


    
else
    echo"Inloggegevens zijn fout";
?>