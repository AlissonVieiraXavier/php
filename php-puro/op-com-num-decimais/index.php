<?php

$debitos = array();
$creditos = array();

array_push($debitos,10);
array_push($debitos,20);
array_push($creditos,30);

function saldo( array $debitos, array $creditos){
    return array_sum($creditos) - array_sum($debitos);
}

echo number_format($saldo,2,',','.');