<?php

class cidade
{

    private $nome;
    private $populacao;
    private $area;
    private $impostoCobradoPorHabitante;

    public function __construct($nome, $populacao, $area, $impostoCobradoPorHabitante)
    {
        $this->nome = $nome;
        $this->populacao = $populacao;
        $this->area = $area;
        $this->impostoCobradoPorHabitante = $impostoCobradoPorHabitante;
    }

    public function calcularDensidadePopulacional()
    {
        if ($this->area == 0) {
            return "A área da cidade não pode ser zero.";
        }
        return $this->populacao / $this->area;
    }
    public function aumentarPopulacao($quantidade)
    {
        if ($quantidade < 0) {
            return "A quantidade de aumento deve ser um número positivo.";
        }
        $this->populacao += $quantidade;
    }
    public function diminuirPopulacao($quantidade)
    {
        if ($quantidade < 0) {
            return "A quantidade de diminuição deve ser um número positivo.";
        }
        $this->populacao -= $quantidade;
        if ($this->populacao < 0) {
            $this->populacao = 0;
        }
    }
    public function alterarArea($novaArea)
    {
        if ($novaArea < 0) {
            return "A nova área deve ser um número positivo.";
        }
        $this->area = $novaArea;
    }
    public function alterarNome($novoNome)
    {
        $this->nome = $novoNome;
    }
    public function calcularArrecadacaoTotal()
    {
        return $this->populacao * $this->impostoCobradoPorHabitante;
    }
    public function aumentarImposto($percentualAumento)
    {
        if ($percentualAumento < 0) {
            return "O percentual de aumento deve ser um número positivo.";
        }
        $this->impostoCobradoPorHabitante += $this->impostoCobradoPorHabitante * ($percentualAumento / 100);
    }

    public function DiminuirImposto($percentualDiminuicao)
    {
        if ($percentualDiminuicao < 0) {
            return "O percentual de diminuição deve ser um número positivo.";
        }
        $this->impostoCobradoPorHabitante -= $this->impostoCobradoPorHabitante * ($percentualDiminuicao / 100);
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getPopulacao()
    {
        return $this->populacao;
    }
    public function getArea()
    {
        return $this->area;
    }
    public function getImpostoCobradoPorHabitante()
    {
        return $this->impostoCobradoPorHabitante;
    }
}
$nomeCidade = readline("Digite o nome da cidade: ");
$populacaoCidade = (int)readline("Digite a população da cidade: ");
$areaCidade = (float)readline("Digite a área da cidade (em km²): ");
$impostoCobradoPorHabitante = (float)readline("Digite o imposto cobrado por habitante: ");

$cidade1 = new cidade($nomeCidade, $populacaoCidade, $areaCidade, $impostoCobradoPorHabitante);
do {
    echo "Oque voce deseja fazer com a cidade?\n";
    echo "1 - Calcular Densidade Populacional\n";
    echo "2 - Calcular Arrecadação Total\n";
    echo "3 - Alterar População\n";
    echo "4 - Alterar Área\n";
    echo "5 - Alterar Nome\n";
    echo "6 - Alterar Imposto\n";
    echo "0 - Sair\n";

    $opcao = readline("Digite a opção desejada: ");

    switch ($opcao) {
        case 0:
            echo "Saindo do programa...";
            break;
        case 1:
            echo "Densidade Populacional: " . $cidade1->calcularDensidadePopulacional() . " habitantes por km²\n";
            break;
        case 2:
            echo "Arrecadação Total: R$ " . $cidade1->calcularArrecadacaoTotal() . "\n";
            break;
        case 3:
            $opcaoPopulacao = readline("Deseja aumentar ou diminuir a população: ");
            echo "1 - Aumentar\n";
            echo "2 - Diminuir\n";
            switch ($opcaoPopulacao) {
                case 1:
                    $quantidadeAumento = (int)readline("Digite a quantidade de aumento: ");
                    $cidade1->aumentarPopulacao($quantidadeAumento);
                    echo "População atualizada: " . $cidade1->getPopulacao() . "\n";
                    break;
                case 2:
                    $quantidadeDiminuicao = (int)readline("Digite a quantidade de diminuição: ");
                    $cidade1->diminuirPopulacao($quantidadeDiminuicao);
                    echo "População atualizada: " . $cidade1->getPopulacao() . "\n";
                    break;
                default:
                    echo "Opção inválida";
            }
            break;
        case 4:
            $novaArea = (float)readline("Digite a nova área da cidade (em km²): ");
            $cidade1->alterarArea($novaArea);
            echo "Área atualizada: " . $cidade1->getArea() . " km²\n";
            break;
        case 5:
            $novoNome = readline("Digite o novo nome da cidade: ");
            $cidade1->alterarNome($novoNome);
            echo "Nome atualizado: " . $cidade1->getNome() . "\n";
            break;
        case 6:
            $opcaoImposto = readline("Deseja aumentar ou diminuir o imposto: ");
            echo "1 - Aumentar\n";
            echo "2 - Diminuir\n";
            switch ($opcaoImposto) {
                case 1:
                    $percentualAumento = (float)readline("Digite o percentual de aumento: ");
                    $cidade1->aumentarImposto($percentualAumento);
                    echo "Imposto atualizado: R$ " . $cidade1->getImpostoCobradoPorHabitante() . " por habitante\n";
                    break;
                case 2:
                    $percentualDiminuicao = (float)readline("Digite o percentual de diminuição: ");
                    $cidade1->diminuirImposto($percentualDiminuicao);
                    echo "Imposto atualizado: R$ " . $cidade1->getImpostoCobradoPorHabitante() . " por habitante\n";
                    break;
                default:
                    echo "Opção inválida";
            }
            break;
        default:
            echo "Opção inválida";
    }
} while ($opcao != 0);
