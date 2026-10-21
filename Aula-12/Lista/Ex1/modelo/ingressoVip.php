<?php

require_once ('modelo/Ingresso.php');

class IngressoVip extends Ingresso
{
    private $valorAdicional;

    public function getValorTotal(): float
    {
        return parent::getValorTotal() + $this->valorAdicional;
    }

    public function setValorAdicional($valorAdicional): self
    {
        $this->valorAdicional = $valorAdicional;

        return $this;
    }
}