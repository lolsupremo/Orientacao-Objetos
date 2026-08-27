<?php

class calculadora
{
    private $num1;
    private $num2;
    
    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function soma()
    {
        return $this->num1 + $this->num2;
    }

    public function subtracao()
    {
        return $this->num1 - $this->num2;
    }

    public function multiplicacao()
    {
        return $this->num1 * $this->num2;
    }

    public function divisao()
    {
        if ($this->num2 == 0) {
            return "Não é possível dividir por zero.";
        }
        return $this->num1 / $this->num2;
    }
    public function resto()
    {
        if ($this->num2 == 0) {
            return "Não é possível dividir por zero.";
        }
        return $this->num1 % $this->num2;
    }
}

$Calculadora = new calculadora(10, 5);
echo "Soma: " . $Calculadora->soma() . "\n";
echo "Subtração: " . $Calculadora->subtracao() . "\n";
echo "Multiplicação: " . $Calculadora->multiplicacao() . "\n";
echo "Divisão: " . $Calculadora->divisao() . "\n";
echo "Resto: " . $Calculadora->resto() . "\n";