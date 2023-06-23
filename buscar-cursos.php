<?php

require_once 'vendor/autoload.php';


use GuzzleHttp\Client;
use Ocaioaug\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
    'base_uri' => 'https://www.alura.com.br/', #cria a url base para buscar
    'verify' => false
]);

$crawler = new Crawler();
$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo exibeMensagem($curso);
}