<?php
session_start();
echo $_SESSION["melding"];
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Formulier</h1>
    <form method="POST" class="form-inline" action="login.php">
        <input type="email" class="form-control mb-2 mr-sm-2" placeholder="e-mail" id="mail" name="mail">
        <input type="password" class="form-control mb-2 mr-sm-2" placeholder="wachtwoord" id="pass" name="pass">
        <button type="submit" class="btn btn-secondary mb-2">Login</button>
    </form>
</body>
</html>