<?php



class Ingresso
{

    private $valor;

    public function getValorTotal(): float
    {
        return $this->valor;
    }
    
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}
