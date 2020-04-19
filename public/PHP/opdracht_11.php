<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
require('database.php');

$database = "weerstations";
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);

function toon_tabel($sql,$DBverbinding) {
  $records = mysqli_query($DBverbinding, $sql);
  $record_teller=0;
  while($record = mysqli_fetch_assoc($records)) {
    $lijst[$record_teller]=$record;
    $record_teller++;
  }
  echo '<h2>Huidige inhoud database weerstations:</h2>
        <table style="border-collapse: collapse; width: 450px; background: white; text-align: center; font-size: 1.2em;">';
  foreach ($lijst as $record) {
    echo '<tr style="height: 20px;">';
    echo '<td style="border: 2px solid blue; padding: 5px;">'.$record['ws_id'].'</td>
          <td style="border: 2px solid blue; padding: 5px;">'.$record['plaats'].'</td>
          <td style="border: 2px solid blue; padding: 5px;">'.$record['beheerder'].'</td>';
    echo '</tr>';
  }
  echo '</table>';
}

/****************************
TYP HIERONDER JOUW PHPCODE
****************************/
      
$sql = "SELECT * FROM stations"; 
toon_tabel($sql,$DBverbinding);
$sql = "INSERT INTO stations (plaats, beheerder) VALUES ('Groningen', 'Gerda')";
mysqli_query($DBverbinding, $sql);
$sql = "SELECT * FROM stations";
toon_tabel($sql,$DBverbinding);
$sql = "DELETE FROM stations WHERE plaats='Groningen'";
mysqli_query($DBverbinding, $sql);
$sql = "SELECT * FROM stations";
toon_tabel($sql,$DBverbinding);
$sql = "DELETE FROM stations WHERE ws_id>5";
mysqli_query($DBverbinding, $sql);
mysqli_close($DBverbinding);  

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>