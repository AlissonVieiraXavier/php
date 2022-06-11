<?php 

//selecionando arquivo.
$file = fopen(filename:'titulos.txt',mode:'r');
//senão estiver no fim do arquivo. 
while(!feof($file)){
//lendo a linha completa.    
$titles = fgets($file);
echo $titles;
}; 

fclose($file);