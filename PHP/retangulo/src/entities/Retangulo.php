<?php

namespace Deivz\Retangulo\entities;

class Retangulo
{
    private float $altura;
    private float $largura;

    public function __construct(float $altura, float $largura)
    {
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function calcularArea(): float
    {
        return number_format($this->altura * $this->largura, 2);
    }

    public function calcularDiagonal(): float
    {
        return number_format(sqrt(pow($this->altura, 2) + pow($this->largura, 2)), 2);
    }

    public function calcularPerimetro(): float
    {
        return number_format(2*($this->altura + $this->largura), 2);
    }

    public function __toString()
    {
        return "Area: " . $this->calcularArea() . PHP_EOL
               . "Perímetro: " . $this->calcularPerimetro() . PHP_EOL
               . "Diagonal: " . $this->calcularDiagonal() . PHP_EOL;
    }
}