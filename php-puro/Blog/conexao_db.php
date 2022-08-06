<?php 

$host = 'localhost';
$user = 'root';
$password ='Avx0231?';
$database = 'blog';

$mysqli = new mysqli($host,$user,$password,$database) or die($mysqli->error.'não foi possivel conectar ao database');
$mysqli->set_charset('utf8');
