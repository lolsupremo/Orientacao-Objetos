<?php

require_once "modelo/Veiculo.php";

class Onibus extends Veiculo {

    public function __construct()
    {
        $this->TarifaKm = 4.20;
        $this->TatifaViagem = 10.00;
        $this->TipoVeiculo = "ônibus";
    }
}