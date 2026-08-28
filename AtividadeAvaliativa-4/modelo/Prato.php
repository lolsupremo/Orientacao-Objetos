<?php

class Prato
{
    private int $numero;
    private string $nome;
    private float $valor;

    public function __construct(int $numero, string $nome, float $valor)
    {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}

