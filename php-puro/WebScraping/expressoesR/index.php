<?php 

require './vendor/autoload.php';
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$response = $client->request('GET', uri:'https://www.ev.org.br/areas-de-interesse/desenvolvimento-pessoal-e-profissional');

$html = $response->getBody();
$crawler = new Crawler();
$crawler->addHtmlContent($html);

$elements = $crawler->filter('a.m-card_link');
$cursos = [];

foreach($elements as $i){
    $cursos[] = $i->textContent;
}
for($i=0; $i <= count($cursos);$i++){
echo $cursos[$i].PHP_EOL;
}




