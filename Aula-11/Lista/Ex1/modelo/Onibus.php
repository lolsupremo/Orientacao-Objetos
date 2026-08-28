<?php

require_once("Veiculo.php");
class Onibus extends veiculo {

    private $pesoMax;
    private $qntPassageiros;

    public function __construct($modelo, $velMaxima, $cor, $pesoMax, $qntPassageiros) {
        $this->modelo = $modelo;
        $this->velMaxima = $velMaxima;
        $this->cor = $cor;
        $this->pesoMax = $pesoMax;
        $this->qntPassageiros = $qntPassageiros;
    }

        public function __toString()
    {
        return "Ônibus: $this->modelo, Velocidade Máxima: $this->velMaxima, Cor: $this->cor, Peso Máximo: $this->pesoMax, Quantidade de Passageiros: $this->qntPassageiros";
    }
}