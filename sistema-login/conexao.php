<?php 
//dados da conexao com o banco;
$usuario = "root";
$senha = "Avx0231?";   
$db = "login";
$host="127.0.0.1";

$mysqli = new mysqli($host,$usuario,$senha,$db);

if($mysqli->error){
    die("falha ao conectar com o banco de dados".$mysqli->error);
    
}
