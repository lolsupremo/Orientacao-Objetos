<?php

require_once "modelo/Veiculo.php";

class Carro extends Veiculo {

    public function __construct()
    {
        $this->TarifaKm = 1.50;
        $this->TatifaViagem = 7.00;
        $this->TipoVeiculo = "carro";
    }
}