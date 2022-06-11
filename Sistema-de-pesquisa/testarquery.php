<?php
include('./conexao.php');


$code_sql = "SELECT * FROM tenis WHERE marca LIKE 'nike' OR numero_disponivel LIKE 'nike' OR cores_disponiveis LIKE 'nike'";
$query_sql = $mysqli->query($code_sql) or die("Erro de cunsulta ao database" . $mysqli->error);

echo $query_sql->num_rows;