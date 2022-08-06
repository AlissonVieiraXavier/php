<?php
include("conexao.php");

//Validação do preenchimento de campos
if (isset($_POST["email"]) || isset($_POST["senha"])){
    if(strlen($_POST["email"]) == 0){
        echo "<p class=\"p-alert\">Preencha seu Email!</p>";
    }else if(strlen($_POST["senha"]) == 0){
        echo "<p class=\"p-alert\">Preencha sua Senha!</p>";
    }
    else{
    //prevenção contra mysql injection
        $email = $mysqli->real_escape_string($_POST["email"]);
        $senha = $mysqli->real_escape_string($_POST["senha"]);

    //query
    $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução da consulta ao banco de dados.");
    
    $quantidade = $sql_query->num_rows;

    //baseando-se na quantidade de linhas: 0 falha na execução da query e 1 usuario localizado no banco.
    if($quantidade == 1){
       $usuario = $sql_query->fetch_assoc();
       if(!isset($_SESSION)){
           session_start();

           $_SESSION["id"] = $usuario['id'];
           $_SESSION["nome"] = $usuario['nome'];

           header('location:painel.php');

       }
    }else{
        echo "<p class=\"p-alert\">falha ao logar, Email ou senha incorretos tente novamente.</p>";
    }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <form class="form" method="POST" action="">
        <h1>Entrar</h1>
        <div>
            <label class="label">Email</label>
            <input class="input" type="text" name="email">
        </div>
        <div>
            <label  class="label" >Senha</label>
            <input  class="input" type="password" name="senha">
        </div>
        <p>
            <button class="btn" type="submit">Entrar</button>
        </p>


</body>
</html>