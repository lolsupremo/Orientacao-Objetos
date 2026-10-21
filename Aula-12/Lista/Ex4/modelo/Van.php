<?php

require_once "modelo/Veiculo.php";

class Van extends Veiculo {

    public function __construct()
    {
        $this->TarifaKm = 2.10;
        $this->TatifaViagem = 10.00;
        $this->TipoVeiculo = "Van";
    }
}