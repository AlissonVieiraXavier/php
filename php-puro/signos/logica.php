<?php

//puxa dados do xml
$signos = simplexml_load_file('signos.xml');

//recebe e formata a data;
$data_de_nascimento = addslashes($_POST['date']);
$data_de_nascimento  = explode('-', $data_de_nascimento);
$dataSemAno = $data_de_nascimento[1]."/".$data_de_nascimento[2];

//iteração para verificar qual é o signo.
foreach($signos->signo as $signo){
    $dataInicioFormatada = explode('/', $signo->dataInicio);
    $dataInicioFormatada = $dataInicioFormatada[1]."/".$dataInicioFormatada[0];

    $dataFinalFormatada = explode('/', $signo->dataFim);
    $dataFinalFormatada = $dataFinalFormatada[1]."/".$dataFinalFormatada[0];

    if(strtotime($dataSemAno) >= strtotime($dataInicioFormatada) && strtotime($dataSemAno) <= strtotime($dataFinalFormatada)){
          echo "Você é do signo: ".$signo->signoNome;
          
          echo "<br/><br/>Descrição: ".$signo->descricao;
    }
};
