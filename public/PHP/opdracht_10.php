<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

// het verschil tussen include en require is dat het script bij require wordt gestopt als het bestand niet wordt gevonden
require('database.php');
$database = "top_2000_v2";
//maak databaseverbinding
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);
// Controleer de verbinding
if (!$DBverbinding) {
  // Geef de foutmelding die de server teruggeeft en stop met de uitvoer van PHP (die)
  die("Verbinding mislukt: " . mysqli_connect_error());
}
else {
  // Dit gedeelte laat je normaliter weg, maar is hier ter illustratie toegevoegd
  echo '<h1 style="color:green;">Verbinding gelukt</h1>';
}

echo "<h2>RESULTAAT</h2>";
// Voer een query uit
$sql = "SELECT * FROM artiest,titel,notering WHERE artiest.id=titel.artiest_id AND notering.lied_id=titel.id AND notering.jaar=2014 AND artiest='Nirvana' ORDER BY positie ASC";
$records = mysqli_query($DBverbinding, $sql);
      
if (mysqli_num_rows($records) > 0) {
  // Voor elke rij uit de resultaattabel wordt een array aangemaakt
  while($record = mysqli_fetch_assoc($records)) {
    echo "<b>".$record["titel"]."</b> stond in 2014 op positie ".$record['positie'].".<br>";
  }
}
else {
  echo "0 resultaten";
}

// Als je klaar bent dan sluit je de gemaakte verbinding met de database
mysqli_close($DBverbinding);  

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>