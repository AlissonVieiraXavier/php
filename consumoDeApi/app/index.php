<?php
require_once './config/config.php';
require_once './modules/hg-api.php';


$hg = new HR_API(KEY_API);
$acao = $hg->getHigh('finance/');

$horaAtual = date('H:i');



 
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Maior e menor alta da bolsa no momento</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
   <div class="container">
       <div class="row">
           <div class="d-flex flex-column">
               <h3> Cotação do dolar, hora atual: <?php echo $horaAtual;?></h3>
               <p>Moeda: <?php echo $acao['name'];?></p>
               <p>Cotação atual:<?php echo $acao['buy'];?></p>
       </div>
<<<<<<< HEAD
    </div>.
=======
    </div>
>>>>>>> refs/remotes/origin/main




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>