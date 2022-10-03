<?php

require __DIR__ . '/../vendor/autoload.php';

use Deivz\Funcionario\entities\Funcionario;

echo("Informe o nome do funcionário: ");
$nome = readline();

echo("Informe o salário do funcionário " . $nome . ": ");
$salario = floatval(readline());

echo("Informe o imposto correspondente ao salário do funcionário " . $nome . ": ");
$imposto = floatval(readline());

$funcionario = new Funcionario($nome, $salario, $imposto);

echo("Funcionário: " . $funcionario. PHP_EOL);

echo("Qual a porcentagem do aumento de salário de " . $nome . "? ");
$salarioAumentado = floatval(readline());
$funcionario->aumentarSalario($salarioAumentado);

echo("Dados atualizados: " . $funcionario);