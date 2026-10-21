<?php

require_once 'Calculadora.php';

class Modulo extends Calculadora{

    public function calcular()
    {
        return $this->numA % $this->numB;
    }

}