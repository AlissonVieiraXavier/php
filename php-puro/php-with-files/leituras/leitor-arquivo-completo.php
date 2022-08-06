<?php

$file = fopen(filename:'titulos.txt',mode:'r');
$tamanhoDoArquivo= filesize($file);

$titles = fread($file, $tamanhoDoArquivo);
echo $titles.PHP_EOL;

fclose($file);
