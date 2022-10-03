<?php

namespace Deivz\Estoque\entities;

class Produto
{
    private string $nome;
    private float $preco;
    private int $quantidade;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = 0;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function mostrarTotalEmEstoque(): float
    {
        return $this->preco * $this->quantidade;
    }

    public function adicionarAoEstoque(int $quantidade): void
    {
        $this->quantidade += $quantidade;
    }

    public function removerDoEstoque(int $quantidade): void
    {
        $this->quantidade -= $quantidade;
    }

    public function __toString()
    {
        return $this->nome
                . ", $"
                . floatval($this->preco)
                . ", "
                . $this->quantidade
                . " unidades, Total: $"
                . $this->mostrarTotalEmEstoque(); 
    }
}