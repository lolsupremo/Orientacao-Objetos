<?php

class posto 
{
    private $nome;
    private $endereco;
    private $litrosEstoque;
    private $abastecimentos = [];

    public function __construct($nome, $endereco, $litrosEstoque)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->litrosEstoque = $litrosEstoque;
    }

    public function __toString()
    {
        return sprintf("%s, %s, %s\n", $this->nome, $this->endereco, $this->litrosEstoque);
    }

    public function adicionarAbastecimento($litros)
    {
        if ($litros <= $this->litrosEstoque) {
            $this->abastecimentos[] = $litros;
            $this->litrosEstoque -= $litros;
            return true;
        } else {
            return false;
        }   
    }

    public function listarAbastecimentos()
    {
        return $this->abastecimentos;
    }

    public function reporEstoque($litros)
    {
        if ($litros <= 0) {
            return false;
        } else {
            $this->litrosEstoque += $litros;
            return true;
        }
        
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getLitrosEstoque()
    {
        return $this->litrosEstoque;
    }

}

$posto1 = new posto("Posto do Estevão", "Rua dos arabes", 0);
$escolha = 1;
while ($escolha != 0) {
    echo "Escolha uma opção:\n";
    echo "1. Adicionar abastecimento\n";
    echo "2. Listar abastecimentos\n";
    echo "3. Repor estoque\n";
    echo "0. Sair\n";
    $escolha = readline();
    system ("clear");
    switch ($escolha) {
        case 1:
            $litros = (float)readline("Digite a quantidade de litros a abastecer: ");
            
            if ($posto1->adicionarAbastecimento($litros)) {
                echo "Abastecimento de $litros litros realizado com sucesso.\n";    
            }else {
                echo "Não foi possível realizar o abastecimento.\n";
            }
            break;
        case 2:
            $abastecimentos = $posto1->listarAbastecimentos();
            if (count($abastecimentos) == 0) {
                echo "Nenhum abastecimento realizado.\n";
            } else {
                echo "Abastecimentos realizados:\n";
                for ($i=0; $i < count($abastecimentos); $i++) { 
                    echo "Abastecimentos " . ($i + 1) . ". " . $abastecimentos[$i] . " litros\n";
                }
            }
            break;
        case 3:
            $litrosRepor = readline("Digite a quantidade de litros a repor: ");
            if ($posto1->reporEstoque($litrosRepor)) {
                echo "Estoque reposto com sucesso.\n";
            } else {
                echo "Não foi possível repor o estoque.\n";
            }
            break;
        case 0:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida.\n";
    }
}