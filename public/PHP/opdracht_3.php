<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$waarde=9/10;
$kwad=pow($waarde,2);
$rec=1/$kwad;
$afgerond=round($rec,7);
$fl=floor(1000000*$rec)/1000000;
echo "$rec <br>";

echo "Het kwadraat van $waarde is $kwad.<br>
      Het omgekeerde daarvan is (afgerond:) $afgerond<br>
      Afgekapt is $fl<br>";

$a=3;
$b=4;
$c=sqrt($a*$a+$b*$b);
echo "C is $c";
/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>