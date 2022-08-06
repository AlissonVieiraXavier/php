<?php 
if(!isset($_SESSION)){
    session_start();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    
</body>
</html>




<?php
if(!isset($_SESSION['id'])){
    die('<p class="p-alert">Você não está logado no momento, favor faça login novamente para ter acesso as demais informações.<p><br>
    <p><a class="btn-painel" href="index.php">Efetuar Login</a></p>');
}
?>