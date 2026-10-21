<?php

require_once ('modelo/IngressoVip.php');

class IngressoCamarote extends IngressoVip
{
    private $ValorAdicionalCamarote;

    public function getValorTotal(): float
    {
        return parent::getValorTotal() + $this->ValorAdicionalCamarote;
    }

    public function setValorAdicionalCamarote($ValorAdicionalCamarote): self
    {
        $this->ValorAdicionalCamarote = $ValorAdicionalCamarote;

        return $this;
    }
}