<?php
require('php/begin.php');
require('php/databese.php');
$nummer = 6;
?>
<div id="boven">
    <h1>Nachos </h1>
</div>
<div id="blub">
    <div id= "links">
        <img src="pics/broccoli.png" alt="recept1" width="90%" >
        <br>
        <h3>benodigheden</h3>
        <ul>
          <li>1 rode ui</li>
<li> 1 el jalapeñoplakjes in pot </li>
<li> 2 tomaten </li>
<li> 150 g tortillachips </li>
<li> 125 ml crème fraîche light</li>
<li> 100 g geraspte belegen kaas </li>
<li> 15 g verse koriander </li>
        </ul>
    </div>
    <div id= "rechts">
        <h3> instructies </h3>
       <p>1.	Verwarm de oven voor op 200 ºC. Snijd de rode ui in ringen en jalopeñoplakjes fijn. Verwijder de zaadjes van de tomaten en snijd het vruchtvlees in kleine blokjes. </p>

<p>2.	Verdeel de chips over een ingevette lage ovenschaal. Schep de crème fraîche erop en verdeel de ringen ui, blokjes tomaat en jalapeñopepers erover. Bestrooi met de geraspte kaas. Zet de nachos 5-10 min. in de oven tot de kaas is gesmolten. Strooi de koriander over de nachos. </p>
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