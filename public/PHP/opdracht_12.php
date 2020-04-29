<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
require('database.php');

function toon_tabel($sql,$DBverbinding) {
  $records = mysqli_query($DBverbinding, $sql);
  $record_teller=0;
  while($record = mysqli_fetch_assoc($records)) {
    $lijst[$record_teller]=$record;
    $record_teller++;
  }
  echo '<h2>Gebruik &eacute;&eacute;n van onderstaande gebruikersgegevens om in te loggen:</h2>
        <table style="border-collapse: collapse; width: 450px; background: white; text-align: center; font-size: 1.2em;">
        <tr style="background-color: blue; color: white;"><th>gebruikersnaam</th><th>wachtwoord</th></tr>';
  foreach ($lijst as $record) {
    echo '<tr style="height: 20px;">';
    echo '<td style="border: 2px solid blue; padding: 5px;">'.$record['beheerder'].'</td>';
    echo '<td style="border: 2px solid blue; padding: 5px;">'.$record['plaats'].'</td>';
    echo '</tr>';
    }
  echo '</table>';
}
      
function toon_formulier() {
  echo '<h1>Login om verder te gaan.</h1>
   <form method="POST" action="">
     <label>Gebruiker</label>
     <input type="text" name="gebruikersnaam" placeholder="voer uw gebruikersnaam in...">
     <label>Wachtwoord</label>
     <input type="password" name="wachtwoord" placeholder="Geef uw wachtwoord...">
     <input type="submit" name="submit" value="inloggen">
   </form>';   
}

$database = "weerstations";
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);

/****************************
TYP HIERONDER JOUW PHPCODE
****************************/
function toon_logout() {
  echo '<h2>Klik hier om uit te loggen</h2>
   <form method="POST" action="">
     <input type="submit" name="logout" value="uitloggen">
   </form>';   }
session_start();
$sql = "SELECT * FROM stations ORDER BY 1 DESC"; 
toon_tabel($sql,$DBverbinding);

if (isset($_POST['gebruikersnaam'])) {
    $naam=$_POST['gebruikersnaam'];
    $pass=$_POST['wachtwoord'];
    $sql="SELECT * FROM stations WHERE beheerder='".$naam."'AND plaats='".$pass."'";
    $records = mysqli_query($DBverbinding, $sql);      
    if (mysqli_num_rows($records) == 1) {
      $_SESSION["user"]= "$naam";
      header("Location: opdracht_12.php");
      exit();
    }
    else {
      echo "<h1 style='color: red;'>Gebruikersnaam of wachtwoord onjuist</h1>";
    }
}

mysqli_close($DBverbinding); 

if (isset($_SESSION["user"]) && !isset($_POST['logout'])) {
  echo "<h1 style='color: green;'>Welkom ".$_SESSION["user"]."</h1>";
  //echo 'De sessie wordt nu weer afgesloten. Klik F5 om opnieuw in te loggen.';
  toon_logout();
}
else {
  if (isset($_POST['logout'])) {
    echo "<h1 style='color: orange;'>UITGELOGD</h1>";
    session_unset();
    session_destroy();
  }
$sql = "SELECT * FROM stations ORDER BY 1 DESC";
  toon_tabel($sql,$DBverbinding);
  toon_formulier();
}

echo "<h3>inhoud SESSION-array:</h3><PRE>";
print_r($_SESSION);
echo "</PRE>";

echo "<h3>inhoud POST-array:</h3><PRE>";
print_r($_POST);
echo "</PRE>";

mysqli_close($DBverbinding);
/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>