<?php
    require('php/databese.php');
    session_start();
    if (isset($_POST['naam'])) {
        $naam = $_POST['naam'];
        $woord = $_POST['woord'];
        // $hash = hash('sha512',$woord);
        $sql = "SELECT Gebruikersnaam, Wachtwoord FROM Gebruikers WHERE Gebruikersnaam='".$naam."' AND Wachtwoord='".$woord."'";
        $records = mysqli_query($DBverbinding, $sql);
        if (mysqli_num_rows($records) == 1) {
            $_SESSION["user"] = "$naam";
            $_SESSION["melding"] = "U bent ingelogd met {$_SESSION["user"]}.";
            $_SESSION["log"] = 1;
            header("Location: index.php");
            
        }
        else {
            $_SESSION["melding"] = "Het is niet gelukt om in te loggen. Probeer het opnieuw.";
            $_SESSION["log"] = 0;
            header("Location: inlog.php");
            
            
        }
    }
?>    
