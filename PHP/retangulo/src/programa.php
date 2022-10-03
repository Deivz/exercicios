<?php

require __DIR__ . '/../vendor/autoload.php';

use Deivz\Retangulo\entities\Retangulo;

echo("Digite o valor da altura do retângulo: " . PHP_EOL);
$altura = readline();

echo("Digite o valor da largura do retângulo: " . PHP_EOL);
$largura = readline();

$retangulo = new Retangulo($altura, $largura);

echo($retangulo->__toString());