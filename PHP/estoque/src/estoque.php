<?php

require __DIR__ . '/../vendor/autoload.php';

use Deivz\Estoque\entities\Produto;

echo("Entre com os dados do produto: ". PHP_EOL);

echo("Nome: ");
$nome = readline();

echo("Preço: ");
$preco = (float) readline();

$produto = new Produto($nome, $preco);

echo("Quantidade em estoque: " . PHP_EOL);
$produto->adicionarAoEstoque((int) readline());

echo("Dados do produto: " . $produto->__toString() . PHP_EOL);

echo("Entre com a quantidade a ser adicionada ao estoque: ");
$produto->adicionarAoEstoque((int) readline());

echo("Produto adicionado ao estoque: " . $produto->__toString() . PHP_EOL);

echo("Entre com a quantidade a ser removida do estoque: ");
$produto->removerDoEstoque((int) readline());

echo("Produto removido do estoque: " . $produto->__toString() . PHP_EOL);