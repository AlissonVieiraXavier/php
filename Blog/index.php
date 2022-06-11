<?php 
require 'conexao_db.php';
include 'src/artigos.php';
$artigo = new Artigo($mysqli);
$artigos = $artigo->exibirTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="container">
        <h1>Blog</h1>
        <?php foreach($artigos as $artigo):?>
        <h2>
            <a href="artigo.php?id=<?php echo $artigo['id']?>">
                <?php echo $artigo['titulo'];?>
            </a>
        </h2>
        <p>
            <?php echo $artigo['conteudo']?>
        </p>
        <h2>
        <?php endforeach; ?>
    </div>
</body>

</html>