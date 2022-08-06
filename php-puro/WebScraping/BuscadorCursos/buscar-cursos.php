<?php

require 'vendor/autoload.php';
require 'src/Buscador.php';

use main\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.ev.org.br/']);
$crawler = new Crawler();

$buscardor = new Buscador($client, $crawler);
$cursos = $buscardor->buscar('/areas-de-interesse/programacao');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
