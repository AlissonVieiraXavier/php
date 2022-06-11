<?php 
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Pesquisa de alunos</h1>
    <form action="" method="POST">
     <input type="text" name="busca" placeholder="digite o nome do aluno aqui">
     <button type="submit">Pesquisar</button>
    </form>
    <?php 
    if(isset($_POST['busca'])){
            $search = $mysqli->real_escape_string($_POST['busca']);
            $code_sql = "SELECT * FROM alunos WHERE nome_aluno LIKE '%$search%' OR idade_aluno LIKE '%$search%'";
            //consulta
            $query_sql = $mysqli->query($code_sql) or die("Erro de consulta ao database" . $mysqli->error);
                    
            //validação de retorno do banco
            if($search == ""){
                echo "<script>alert('Campo de pesquisa vazio.')</script>" ; 
            
            }elseif($query_sql->num_rows == 0){  
                echo "<script>alert('Nenhum resultado encontrado!')</script>" ; 
            ?>
            <?php }else{
                    while($dados = $query_sql->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $dados['nome_aluno']; ?></td>
                            <td><?php echo $dados['idade_aluno']; ?></td>
                        </tr>
                        <?php
                    };
                }
          
    }?>       
      
</body>
</html>