<?php

class veiculo
{

    private $capacidade;
    private $passagensVendidas;

    public function __construct($capacidade)
    {
        $this->capacidade = $capacidade;
        $this->passagensVendidas = 0;
    }
    public function venderPassagem($CompraPassagens)
    {
        if ($this->passagensVendidas + $CompraPassagens <= $this->capacidade) {
            $this->passagensVendidas += $CompraPassagens;
            return true;
        } else {
            return false;
        }
    }
}
$capacidade = readline("Digite a capacidade do veículo: ");
$veiculo = new veiculo($capacidade);

do {
    $CompraPassagens = readline("Digite o número de passagens que deseja comprar: ");
    if ($CompraPassagens > 0) {
        if ($veiculo->venderPassagem($CompraPassagens)) {
            echo "Passagem vendida com sucesso!\n";
        } else {
            echo "Desculpe, não há mais passagens disponíveis.\n";
        }
    } else {
        echo "Número de passagens inválido. Digite um número maior que zero.\n";
    }

    
} while ($CompraPassagens > 0);