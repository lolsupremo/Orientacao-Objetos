<?php

class Trapezio
{
    private $baseMaior;
    private $baseMenor;
    private $altura;

    public function __construct($baseMaior, $baseMenor, $altura)
    {
        $this->baseMaior = $baseMaior;
        $this->baseMenor = $baseMenor;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return (($this->baseMaior + $this->baseMenor) * $this->altura) / 2;
    }

    public function __toString()
    {
        return sprintf("Trapezio:\nBase Maior: %.2f\nBase Menor: %.2f\nAltura: %.2f\nÁrea: %.2f\n", $this->baseMaior, $this->baseMenor, $this->altura, $this->calcularArea());
    }
}

$trapezio1 = new Trapezio(10, 5, 4);
$trapezio2 = new Trapezio(8, 3, 6);
$trapezio3 = new Trapezio(12, 7, 5);
$trapezio4 = new Trapezio(15, 10, 8);
$trapezios = [$trapezio1, $trapezio2, $trapezio3, $trapezio4];

$maiorArea = 0;
$trapezioComMaiorArea = null;
foreach ($trapezios as $trapezio) {
    if ($trapezio->calcularArea() > $maiorArea) {
        $maiorArea = $trapezio->calcularArea();
        $trapezioComMaiorArea = $trapezio;
    }
}
echo $trapezioComMaiorArea;