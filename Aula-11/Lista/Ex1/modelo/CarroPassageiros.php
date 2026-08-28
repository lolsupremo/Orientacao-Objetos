<?php

require_once("Veiculo.php");
class CarroPassageiros extends veiculo {

    private $qntPassageiros;

    public function __construct($modelo, $velMaxima, $cor, $qntPassageiros) {
        $this->modelo = $modelo;
        $this->velMaxima = $velMaxima;
        $this->cor = $cor;
        $this->qntPassageiros = $qntPassageiros;
    }

    public function __toString()
    {
        return "Carro: $this->modelo, Velocidade Máxima: $this->velMaxima, Cor: $this->cor, Quantidade de Passageiros: $this->qntPassageiros";
    }

}