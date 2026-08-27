<?php 

require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia {
    private int $consumo;


    public function __construct(int $consumo)
    {
        $this->consumo = $consumo;
    }   

    public function consumirEnergia() {
        if ($this->consumo < 500) {
            return 1.80 * $this->consumo;
        }else {
            return 500*1.80 + ($this->consumo - 500)*2.30;
        }
    }
}