<?php

class Midia
{
    protected $descricao;
    protected $precoPago;
    private $tipo = "Midia Genérica";

    public function __construct($descricao, $precoPago, $tipo)
    {
        $this->descricao = $descricao;
        $this->precoPago = $precoPago;
        $this->tipo = $tipo;

        return;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getDados()
    {
        return "Descrição: " . $this->getDescricao() . " Preço Pago: " . $this->getPrecoPago() . " Tipo: " . $this->getTipo();
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPrecoPago()
    {
        return $this->precoPago;
    }
}
