
 <?php 
    require_once'./conta.php';
    $joao = new conta();
    $maria = new conta();
  
    //abrir contas
    $joao->abrirConta("CP");

    //deposito
    $joao->depositar(20);

    //imprimir saldo
    echo $joao->getSaldo().PHP_EOL;
