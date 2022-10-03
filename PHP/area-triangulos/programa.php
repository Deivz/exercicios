<?php

require __DIR__ . '/vendor/autoload.php';

use Deivz\AreaTriangulos\models\Triangulo;

echo("Informe os valores dos tamanhos dos lados do triângulo X:" . PHP_EOL);
$aX = (float) readline();
$bX = (float) readline();
$cX = (float) readline();

echo("Informe os valores dos tamanhos dos lados do triângulo Y:" . PHP_EOL);
$aY = (float) readline();
$bY = (float) readline();
$cY = (float) readline();

$trianguloUm = new Triangulo($aX, $bX, $cX);
$trianguloDois = new Triangulo($aY, $bY, $cY);

$areaUm = $trianguloUm->calcularArea();
$areaDois = $trianguloDois->calcularArea();

echo ("A área do triângulo X é: ". $areaUm . PHP_EOL);
echo ("A área do triângulo Y é: ". $areaDois . PHP_EOL);

if ($areaUm > $areaDois){
    echo("A maior área encontrada é a área do triângulo X.");
}else{
    echo("A maior área encontrada é a área do triângulo Y.");
}