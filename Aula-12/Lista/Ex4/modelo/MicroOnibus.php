<?php

require_once "modelo/Veiculo.php";

class MicroOnibus extends Veiculo {

    public function __construct()
    {
        $this->TarifaKm = 2.75;
        $this->TatifaViagem = 12.00;
        $this->TipoVeiculo = "Micro-ônibus";
    }
}