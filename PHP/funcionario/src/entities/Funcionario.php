<?php

namespace Deivz\Funcionario\entities;

class Funcionario
{
    private string $nome;
    private float $salarioBruto;
    private float $imposto;

    public function __construct(string $nome, float $salarioBruto, float $imposto)
    {
        $this->nome = $nome;
        $this->salarioBruto = $salarioBruto;
        $this->imposto = $imposto;
    }

    public function calcularSalarioLiquido(): float
    {
        return $this->salarioBruto - $this->imposto;
    }

    public function aumentarSalario(float $aumento): void
    {
        $this->salarioBruto += $this->salarioBruto * $aumento/100;
    }

    public function __toString(): string
    {
        return $this->nome . ", $" . $this->calcularSalarioLiquido();
    }
}