<?php

require_once "modelo/Midia.php";

class Cd extends Midia
{
    private $tipo = "CD";

    public function __construct($descricao, $precoPago)
    {
        parent::__construct($descricao, $precoPago, $this->tipo);
    }

    public function getTipo()
    {
        return $this->tipo;
    }
}