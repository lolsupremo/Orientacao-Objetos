<?php

abstract class Calculadora {

protected $numA;
protected $numB;

public abstract function calcular();

public function __construct($numA, $numB)
{
    $this->numA = $numA;
    $this->numB = $numB;
}

}