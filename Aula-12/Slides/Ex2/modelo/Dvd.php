<?php

require_once "modelo/Midia.php";

class Dvd extends Midia
{
    private $tipo = "DVD";

    public function __construct($descricao, $precoPago)
    {
        parent::__construct($descricao, $precoPago, $this->tipo);
    }

    public function getTipo()
    {
        return $this->tipo;
    }
}