<?php

require_once("Veiculo.php");
class Caminhao extends veiculo {

    private $cargaMaxima;
    private $altura;

    public function __construct($modelo, $velMaxima, $cor, $cargaMaxima, $altura) {
        $this->modelo = $modelo;
        $this->velMaxima = $velMaxima;
        $this->cor = $cor;
        $this->cargaMaxima = $cargaMaxima;
        $this->altura = $altura;
    }

    public function __toString()
    {
        return "Caminhão: $this->modelo, Velocidade Máxima: $this->velMaxima, Cor: $this->cor, Carga Máxima: $this->cargaMaxima, Altura: $this->altura";
    }

}