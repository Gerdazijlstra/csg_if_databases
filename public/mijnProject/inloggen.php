<!DOCTYPE html 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> Login Form</title>
</head>
<body>
    <form method="post" action="validate_login.php" >
        <table >
            <tr>
                <td><label for="users_email">Gebruikersnaam</label></td>
                <td><input type="text" 

                  name="users_email" id="users_email"></td>
            </tr>
            <tr>
                <td><label for="users_pass">Wachtwoord</label></td>
                <td><input name="users_pass" 

                  type="password" id="users_pass"></input></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"/>
                <td><input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
</body>
</html>

