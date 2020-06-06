<?php
$username = 'root';
$password = '';
$host = 'localhost';
$database = 'Bakkenenco';

if(mysqli_connect($host,$username,$password,$database)){
    if(mysqli_connect_errno()){
        echo "Sorry, er ging iets mis:".mysqli_connect_error();
        exit();
    }
} else{
    echo 'Sorry, ik kon helaas geen verbinding maken met de databaseserver!';
    exit();
}
?>