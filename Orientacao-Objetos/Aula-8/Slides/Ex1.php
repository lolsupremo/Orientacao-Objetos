<?php

class Escola
{
    private $quantidadeAlunos;
    private $nome;
    private $endereco;

    public function __construct($nome, $end, $qnt)
    {

        $this->quantidadeAlunos = $qnt;
        $this->nome = $nome;
        $this->endereco = $end;
    }

    public  function getDados(){

        return sprintf("Nome da Escola: %s\nEndereço: %s\nQuantidade de Alunos: %d\n", $this->nome, $this->endereco, $this->quantidadeAlunos);

    }

    public function getQuantidadeAlunos()
    {
        return $this->quantidadeAlunos;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
}

$escola1 = new Escola("Escola Estadual da Silva", "Rua das Flores, 123", 500);
$escola2 = new Escola("Colégio São José", "Avenida Central, 456", 300);
$escola3 = new Escola("Escola Municipal do Bairro", "Praça da Liberdade, 789", 200);
$escola4 = new Escola("Instituto Educacional ABC", "Rua das Palmeiras, 321", 400);

$SeedReginal = [$escola1, $escola2, $escola3, $escola4];

foreach ($SeedReginal as $EscolaX) {
    echo $EscolaX->getDados();
}

$maiorQuantidadeAlunos = 0;
$escolaComMaisAlunos = null;

foreach ($SeedReginal as $EscolaX) {
    if ($EscolaX->getQuantidadeAlunos() > $maiorQuantidadeAlunos) {
        $maiorQuantidadeAlunos = $EscolaX->getQuantidadeAlunos();
        $escolaComMaisAlunos = $EscolaX;
    }
}
echo "Escola com mais alunos:\n";
echo $escolaComMaisAlunos->getDados();