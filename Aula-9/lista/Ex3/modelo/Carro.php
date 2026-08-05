<?php 

class Carro{
    
    private $modelo;
    private $ano;
    private Fabricante $fabricante;

    public function __construct($modelo, $ano, Fabricante $fabricante) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->fabricante = $fabricante;
    }

    public function __toString()
    {
        return sprintf("Modelo: %s Ano: %d Fabricante: %s (%s)", $this->modelo, $this->ano, $this->fabricante->getNome(), $this->fabricante->getSigla());
    }
    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getFabricante(): Fabricante {
        return $this->fabricante;
    }
}






?>