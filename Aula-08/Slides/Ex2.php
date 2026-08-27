<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $sobrenome;

    public function __construct($nome, $idade, $sobrenome)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sobrenome = $sobrenome;
    }

    public function getDados()
    {
        return sprintf("%s %s, %d\n", $this->nome, $this->sobrenome, $this->idade);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

}

$pessoas = [];
while (true) {
    $opcao = readline ("1 - Adicionar Pessoa\n2 - Listar Pessoas\n0 - Sair\nEscolha uma opção: ");
    switch ($opcao) {
        case 1:
            $nome = readline("Nome: ");
            $idade = readline("Idade: ");
            $sobrenome = readline("Sobrenome: ");
            $pessoa = new Pessoa($nome, $idade, $sobrenome);
            $pessoas[] = $pessoa;
            break;
        case 2:
            foreach ($pessoas as $pessoa) {
                echo $pessoa->getDados();
            }
            break;
        case 0:
            exit;
    }
}