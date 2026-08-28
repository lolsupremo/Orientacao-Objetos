<?php

require_once "Jogador.php";

class Defensor extends Jogador 
{
    private $altura;
    public function __construct($nome, $idade, $nacionalidade, $altura) {
        $this->altura = $altura;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
    }

    public function desarmar() {
        echo $this->nome . "  desarmou o adversário.\n";
    }

    public function cabeciar() {
        echo $this->nome . "  cabeceou a bola.\n";
    }

    public function getAltura() {
        return $this->altura;
    }
}