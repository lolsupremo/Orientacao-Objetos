<?php 

require_once("IConsumidorEnergia.php");

class Residencial implements IConsumidorEnergia {
    private int $consumo;

    public function __construct(int $consumo)
    {
        $this->consumo = $consumo;
    }   

    public function consumirEnergia() {
        return 1.05 * $this->consumo;
    }
}