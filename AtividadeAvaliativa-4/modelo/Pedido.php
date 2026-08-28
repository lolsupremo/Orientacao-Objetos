<?php

require_once("Prato.php");

class Pedido
{
    private string $nomeCliente;
    private string $nomeGarcom;
    private Prato $prato;

    public function __construct(
        string $nomeCliente,
        string $nomeGarcom,
        Prato $prato
    ) {
        $this->nomeCliente = $nomeCliente;
        $this->nomeGarcom = $nomeGarcom;
        $this->prato = $prato;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function getNomeGarcom(): string
    {
        return $this->nomeGarcom;
    }

    public function getPrato(): Prato
    {
        return $this->prato;
    }
}
