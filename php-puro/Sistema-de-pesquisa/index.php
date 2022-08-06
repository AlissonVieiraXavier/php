<?php 
include('./conexao.php');

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa System</title>
</head>
<body>
    <h1>Lista de tenis disponíveis</h1>
 <form action=""method="POST">
     <input type="text" placeholder="digite os termos de pesquisa" name="busca">
     <button type="submit">Search</button>
 </form>
 <table>
     <tr>
         <th>Marca</th>
         <th>numero</th>
         <th>cores</th>
     </tr>
     <?php
     if(!isset($_POST['busca'])){
         ?>
     <tr>
         <td colspan="3">Digite algo...</td>
     </tr> 
     <?php
      }else{
        $search = $mysqli->real_escape_string($_POST['busca']);
        $code_sql = "SELECT * FROM tenis WHERE marca LIKE '%$search%' OR numero_disponivel LIKE '$search' OR cores_disponiveis LIKE '%$search%'";
        //consulta
        $query_sql = $mysqli->query($code_sql) or die("Erro de cunsulta ao database" . $mysqli->error);
        
        //validação de retorno do banco
      if($search == ""){
        echo "<script>alert('Campo de pesquisa vazio.')</script>" ; 
      
    }elseif($query_sql->num_rows == 0){  
        echo "<script>alert('Nenhum resultado encontrado!')</script>" ; 
      ?>
        <!--<tr>
            <td colspan="3">Nenhum resultado encontrado...</td>
        </tr>-->
        <?php }else{
            while($dados = $query_sql->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $dados['marca']; ?></td>
                    <td><?php echo $dados['numero_disponivel']; ?></td>
                    <td><?php echo $dados['cores_disponiveis']; ?></td>
                </tr>
                
                
                <?php
            };
        }}?>
     
 </table>
    
</body>
</html>