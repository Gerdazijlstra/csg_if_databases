<?php
require('php/begin.php');
require('php/databese.php');
$nummer = 1;
?>
<div id="boven">
    <h1>zandkoekjes </h1>
</div>
<div id="blub">
    <div id= "links">
        <img src="pics/Koekies.png" alt="recept1" width="90%" >
        <br>
        <h3>benodigheden</h3>
        <ul>
            <li>1 middelgroot ei</li>
            <li> 150 g ongezouten roomboter (koud) </li>
            <li> 100 g witte basterdsuiker </li>
            <li> 200 g tarwebloem </li>
        </ul>
    </div>
    <div id= "rechts">
        <h3> instructies </h3>
        <p> 1.	Splits het ei en gebruik alleen de eidooier. Meng vervolgens alle ingrediënten in de keukenmachine tot het deeg een korrelige structuur heeft. Kneed de deegkruimels met koele handen tot een samenhangend deeg. Rol tot een bal en verpak in vershoudfolie en laat het 30 min. in de koelkast rusten. </p>

        <p>2.	Verwarm de oven voor op 175 °C. Bestuif het werkblad met wat bloem en rol het deeg uit tot een lap van ca. 40 x 40 cm en 3-4 mm dik. Steek met behulp van uitsteekvormpjes of een glas koekjes uit het deeg. Kneed het resterende deeg tot een bal en rol opnieuw uit tot al het deeg gebruikt is. Leg de koekjes op enige afstand van elkaar op een met bakpapier beklede bakplaat. </p>
        <p>3.	Bak de koekjes in het midden van de oven in 15-20 min. lichtbruin en gaar. Neem ze van de bakplaat en laat afkoelen, bij voorkeur op een rooster.</p>
    </div>
</div>
<div id="reactie">
<h3>reacties</h3>
<?php
require('php/reacties.php');
?>
</div>
<?php
require('php/eind.php');
?>