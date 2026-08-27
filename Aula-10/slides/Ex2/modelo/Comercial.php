<?php 

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia {
    private int $consumo;


    public function __construct(int $consumo)
    {
        $this->consumo = $consumo;

    }   

    public function consumirEnergia() {
        if ($this->consumo < 100) {
            return 1.45 * $this->consumo;
        }else {
            return 100*1.45 + ($this->consumo - 100)*1.60;
        }
    }
}