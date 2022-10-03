<?php

namespace Deivz\AreaTriangulos\models;

class Triangulo
{
    private float $ladoA;
    private float $ladoB;
    private float $ladoC;

    public function __construct(float $ladoA, float $ladoB, float $ladoC)
    {
        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
        $this->ladoC = $ladoC;
    }

    public function calcularArea()
    {
        $p = ($this->ladoA + $this->ladoB + $this->ladoC)/2;
        return sqrt($p * ($p - $this->ladoA) * ($p - $this->ladoB) * ($p - $this->ladoC));
    }
}