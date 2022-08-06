<?php  

$content = "fefr evrre rgrg  egrger gaesrg eergerg erg!!!";

/*para adicionar conteudo é necessario o parametro flags, caso contrario se for para criar um novo arquico e adicionar o conteudo
não há a necessidade do parametro flags*/ 
file_put_contents('textos-php.txt',$content,flags:FILE_APPEND);
