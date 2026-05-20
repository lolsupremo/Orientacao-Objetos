<?php

class Locadora
{
    private $totalBicicletas;
    private $bicicletasAlugadas;

    public function __construct($TotalBicicletas)
    {
        $this->totalBicicletas = $TotalBicicletas;
        $this->bicicletasAlugadas = 0;
    }

    public function alugarBicicleta() : bool
    {

        if ($this->totalBicicletas == $this->bicicletasAlugadas) {
            return false;
        }
        $this->bicicletasAlugadas += 1;
        return true;
    }

    public function devolverBicicleta() : bool
    {
        if ($this->bicicletasAlugadas < 0) {
            return false;
        }
        $this->bicicletasAlugadas -= 1;
        return true;
    }
}

$QuantidadeTotalBicicletas = readline("Digite a quantidade total de bicicletas disponíveis para aluguel: ");
$locadora = new Locadora($QuantidadeTotalBicicletas);

while (true) {

        echo "\nEscolha uma ação: \n1 - Alugar bicicleta\n2 - Devolver bicicleta  \n3 - Sair\n";
        $acao = readline();
        system('clear');
        if ($acao == 1) {
            if ($locadora->alugarBicicleta()) {
                echo "Bicicleta alugada com sucesso";
            }else {
                echo "Não foi possivel alugar a bicicleta";
            }
        }elseif ($acao == 2) {
            if ($locadora->devolverBicicleta()) {
                echo "Bicicleta devolvida com sucesso";
            }else {
                echo "Não foi possivel devolver a bicicleta";
            }
        }elseif ($acao == 3) {
            echo "Obrigado por usar nossos serviços!";
            break;
        }else {
            echo "Opção inválida. Por favor, escolha uma opção válida.";
        }
}