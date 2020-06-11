<?php 
session_start();
include('mijnProject/db.php');
?>
<?php
require('php/begin.php');
require('db.php');
?>
                <div class="container">
                    <img src="pics/achtergrond1.JPG" alt="bla" style="width:100%;">

                    <div class="centered">Welkom op Bakken & Co!</div>
                    <p class="center">Op deze bakwebsite kun je allemaal recepten vinden die je kunt uitproberen. Laat je inspireren door de lekkere baksels van Bakken & Co. Veel bakplezier!</p>
                   
                </div>  
                <section id="content">
                    <?php 
                        if (isset($_GET['module']) && ($_GET['module'] == 'inloggen')){
                            include ('mijnProject/inloggen.php');
                        }
                        else{
                            include ('mijnProject/plugin.php');
                        }
                    ?>
                </section>
            <?php
require('php/eind.php');
?>