<?php

use Deivz\NotasAluno\entities\Aluno;

require __DIR__ . '/../vendor/autoload.php';

echo("Informe o nome do aluno: ");
$nome = readline();

echo("Informe a nota de " . $nome . " no primeiro trimestre: ");
$notaUm = (float) readline();

echo("Informe a nota de " . $nome . " no segundo trimestre: ");
$notaDois = (float) readline();

echo("Informe a nota de " . $nome . " no terceiro trimestre: ");
$notaTres = (float) readline();

$aluno = new Aluno($nome, $notaUm, $notaDois, $notaTres);

echo($aluno);