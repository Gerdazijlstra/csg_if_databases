<?php 
session_start();
include('mijnProject/db.php');
?>
<?php
require('php/begin.php');
?>
                <div class="container">
                    <img src="achtergrond1.JPG" alt="bla" style="width:100%;">

                    <div class="centered">Welkom op Bakken & Co!</div>
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