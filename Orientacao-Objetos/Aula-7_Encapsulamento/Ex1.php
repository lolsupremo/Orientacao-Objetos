<?php

function ComparaVelocidade($carro1, $carro2, $carro3) {

    if ($carro1->getVelocidadeMaxima() > $carro2->getVelocidadeMaxima()) {
    $carroMaisRapido = $carro1;
    $carroMaisLento = $carro2;
    if ($carro1->getVelocidadeMaxima() > $carro3->getVelocidadeMaxima()) {
        $carroMaisRapido = $carro1;
        if ($carro3->getVelocidadeMaxima() > $carro2->getVelocidadeMaxima()) {
        }
        $carroMaisLento = $carro3;
    } else {
        $carroMaisRapido = $carro3;
    }
} else {
    $carroMaisRapido = $carro2;
    $carroMaisLento = $carro1;
    if ($carro2->getVelocidadeMaxima() > $carro3->getVelocidadeMaxima()) {
        $carroMaisRapido = $carro2;
        if ($carro3->getVelocidadeMaxima() > $carro1->getVelocidadeMaxima()) {
        }
        else {
            $carroMaisLento = $carro3;
        }
    } else {
        $carroMaisRapido = $carro3;
   
    }
}
 return array($carroMaisRapido, $carroMaisLento);
}

class Carro{

private $marca;
private $modelo;
private $anoFabricacao;
private $velocidadeMaxima;



public function getMarca()
{
return $this->marca;
}


public function setMarca($marca): self
{
$this->marca = $marca;

return $this;
}


public function getModelo()
{
return $this->modelo;
}


public function setModelo($modelo): self
{
$this->modelo = $modelo;

return $this;
}


public function getAnoFabricacao()
{
return $this->anoFabricacao;
}


public function setAnoFabricacao($anoFabricacao): self
{
$this->anoFabricacao = $anoFabricacao;

return $this;
}


public function getVelocidadeMaxima()
{
return $this->velocidadeMaxima;
}


public function setVelocidadeMaxima($velocidadeMaxima): self
{
$this->velocidadeMaxima = $velocidadeMaxima;

return $this;
}
}

$carro1 = new Carro();
$carro1->setMarca(readline("Digite a marca do carro: "));
$carro1->setModelo(readline("Digite o modelo do carro: "));
$carro1->setAnoFabricacao(readline("Digite o ano de fabricação do carro: "));
$carro1->setVelocidadeMaxima(readline("Digite a velocidade máxima do carro: "));

$carro2 = new Carro();
$carro2->setMarca(readline("Digite a marca do carro: "));
$carro2->setModelo(readline("Digite o modelo do carro: "));
$carro2->setAnoFabricacao(readline("Digite o ano de fabricação do carro: "));
$carro2->setVelocidadeMaxima(readline("Digite a velocidade máxima do carro: "));

$carro3 = new Carro();
$carro3->setMarca(readline("Digite a marca do carro: "));
$carro3->setModelo(readline("Digite o modelo do carro: "));
$carro3->setAnoFabricacao(readline("Digite o ano de fabricação do carro: "));
$carro3->setVelocidadeMaxima(readline("Digite a velocidade máxima do carro: "));

$comparacao = ComparaVelocidade($carro1, $carro2, $carro3);
$carroMaisRapido = $comparacao[0];
$carroMaisLento = $comparacao[1];

echo "O carro mais rápido é: " . $carroMaisRapido->getMarca() . " " . $carroMaisRapido->getModelo() . " com velocidade máxima de " . $carroMaisRapido->getVelocidadeMaxima() . " km/h\n";
echo "O carro mais lento é: " . $carroMaisLento->getMarca() . " " . $carroMaisLento->getModelo() . " com velocidade máxima de " . $carroMaisLento->getVelocidadeMaxima() . " km/h\n";