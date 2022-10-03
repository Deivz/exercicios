<?php

namespace Deivz\NotasAluno\entities;

class Aluno
{
    private string $nome;
    private float $notaUm;
    private float $notaDois;
    private float $notaTres;

    public function __construct(string $nome, float $notaUm, float $notaDois, float $notaTres)
    {
        $this->nome = $nome;
        $this->notaUm = $notaUm;
        $this->notaDois = $notaDois;
        $this->notaTres = $notaTres;
    }

    public function calcularNota(): float
    {
        return floatval($this->notaUm + $this->notaDois + $this->notaTres);
    }

    public function verificarAprovacao(): bool
    {
        if ($this->calcularNota() < 60) {
            return false;
        } else {
            return true;
        }
    }

    public function __toString(): string
    {
        if (!$this->verificarAprovacao()) {
            return "Nota final: " . $this->calcularNota() . PHP_EOL
                    . "Reprovado!" . PHP_EOL
                    . "Restam " . floatval(60 - $this->calcularNota()) . " pontos para o aluno " . $this->nome . " ser aprovado.";
        } else {
            return "Nota final: " . $this->calcularNota() . PHP_EOL
                    . "Aprovado!";
        }
    }
}
