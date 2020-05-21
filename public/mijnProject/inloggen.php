<?php
session_start();

$host="localhost";
$user="root";
$password="";
$db="jojojo";
$wachtwoordonjuist=false;

$dbverbinding=mysqli_connect("localhost","root","",$db);

    //  if (!$dbverbinding) {
        // Geef de foutmelding die de server teruggeeft en stop met de uitvoer van PHP (die)
      //  echo '<p>jo verbinding mislukt</p>';
      //  die("Verbinding mislukt: " . mysqli_connect_error());
    //  }
      

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['leerlingnummer'])){
    
    $uname=$_POST['leerlingnummer'];
    $password=$_POST['wachtwoord'];
    
    $sql="select * from login where leerlingnummer='".$uname."'AND wachtwoord='".$password."'LIMIT 1"; 
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        $_SESSION["USER_ID"]= "$uname";
        header("Location: primacantina.php");
        exit();
    }
    else{
        $wachtwoordonjuist=true;
        
    }
    
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Prima Cantina</title>
     <meta name="theme-color" content="#50a050" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Pacifico|Rokkitt" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="icon" href="foto/Prima5.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>

  <body>
    
      <section class="container">
          <div class="logologin">               <!--hier onder moet het logo komen!!-->
              <img src="foto/Prima1.png" width="512" height="288">
          </div>
      </section>
      <section id="loginfooter" class="container">
      <div class="login">
 <form method="POST" action="#">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Gebruiker</label>
       <input type="leerlingnummer" name="leerlingnummer" class="form-control" id="exampleDropdownFormEmail1" placeholder="Leerlingnummer">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Wachtwoord</label>
     <input type="password" name="wachtwoord" class="form-control" id="exampleDropdownFormPassword1" placeholder="Wachtwoord">
    </div>
    <div class="fout">
    <?php
  if ($wachtwoordonjuist==true){
    echo "Leerlingnummer of wachtwoord is onjuist."; 
  }
  ?>
  </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input">
        Ingelogd blijven
      </label>
    </div>
   <input type="submit" name="submit" value="LOGIN" class="btn btn-primary">
  </form>
  
    
  </div>
 </section>

  </body>
  <footer>
      <div class="container">
        <div class="row">
          
          <div class="col-lg-8 col-md-10 mx-auto">
            
            <p class="copyright">
              <a class="csg" href="http://www.csg.nl/">
              <div class="copyright">
              <img src="http://www.csg.nl/build/img/logo.svg" width="221" height="146">
              </a>
              <br>
              &copy; CSG augustinus</p>
              </div>
          </div>
        </div>
      </div>
    </footer>
  </html>
<?php
$_SESSION["USER_ID"]= "$uname";
?>