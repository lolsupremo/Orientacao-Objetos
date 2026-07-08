<?php

class Receita {
    private $descricao;
    private $valor;

    public function __construct($descricao, $valor)
    {
        $this->descricao = $descricao;
        $this->valor = $valor;
    }
    public function __toString()
    {
        return sprintf("%s, %.2f\n", $this->descricao, $this->valor);
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getValor()
    {
        return $this->valor;
    }
}


class Despesa {
    private $descricao;
    private $valor;

    public function __construct($descricao, $valor)
    {
        $this->descricao = $descricao;
        $this->valor = $valor;
    }
    public function __toString()
    {
        return sprintf("%s, %.2f\n", $this->descricao, $this->valor);
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getValor()
    {
        return $this->valor;
    }
}


$despesas = [];
$receitas = [];
$escolha = -1;
while ($escolha != 0) {
    echo "Escolha uma opção:\n";
    echo "1. Adicionar receita\n";
    echo "2. Adicionar despesa\n";
    echo "3. Listar receitas\n";
    echo "4. Listar despesas\n";
    echo "5. Sumarizar\n";
    echo "0. Sair\n";
    $escolha = readline();
    system ("clear");
    switch ($escolha) {
        case 1:
            $descricao = readline("Digite a descrição da receita: ");
            $valor = floatval(readline("Digite o valor da receita: "));
            $receita = new Receita($descricao, $valor);
            $receitas[] = $receita;
            break;
        case 2:
            $descricao = readline("Digite a descrição da despesa: ");
            $valor = floatval(readline("Digite o valor da despesa: "));
            $despesa = new Despesa($descricao, $valor);
            $despesas[] = $despesa;
            break;
        case 3:
            if (count($receitas) == 0) {
                echo "Nenhuma receita cadastrada.\n";
            } else {
                echo "Receitas cadastradas:\n";
                for ($i=0; $i < count($receitas); $i++) { 
                    echo "Receita " . ($i + 1) . ": " . $receitas[$i];
                }
            }
            break;
        case 4:
            if (count($despesas) == 0) {
                echo "Nenhuma despesa cadastrada.\n";
            } else {
                echo "Despesas cadastradas:\n";
                for ($i=0; $i < count($despesas); $i++) { 
                    echo "Despesa " . ($i + 1) . ": " . $despesas[$i];
                }
            }
            break;

        case 5:
            $totalReceitas = 0;
            $totalDespesas = 0;
            foreach ($receitas as $receita) {
                $totalReceitas += $receita->getValor();
            }
            foreach ($despesas as $despesa) {
                $totalDespesas += $despesa->getValor();
            }
            echo "Total de receitas: R$ " . $totalReceitas . " \n";
            echo "Total de despesas: R$ " . $totalDespesas . " \n";
            echo "Saldo: R$ " . ($totalReceitas - $totalDespesas) . " \n";
            break;

        case 0:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida.\n";
            break;
    }
}
