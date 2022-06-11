<?php 

$host = 'localhost';
$user= 'root';
$password= 'Avx0231?';
$db= 'escola';


$mysqli = new mysqli($host, $user,$password,$db)or die($mysqli->error.'fail to connect to database');
?>