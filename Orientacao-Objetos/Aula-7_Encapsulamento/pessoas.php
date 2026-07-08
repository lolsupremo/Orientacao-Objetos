<?php

class Pessoa
{

    private $nome;
    private $endereco;
    private $cidade;
    private $UF;
    private $altura;

    public function retornaApresentacao()
    {

    $dados = sprintf("Olá mundo, sou %s, resido no endereco %s, %s-%s e possuo uma altura de %f" ,
     $this->nome, $this->endereco, $this->cidade, $this->UF, $this->altura);

    return $dados;
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }


    public function getEndere()
    {
        return $this->endereco;
    }


    public function setEndere($endere)
    {
        $this->endereco = $endere;

        return $this;
    }


    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUF()
    {
        return $this->UF;
    }

    public function setUF($UF)
    {
        $this->UF = $UF;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }
}

$pessoa1 = new Pessoa();
$pessoa1->setNome("João");
$pessoa1->setEndere("Rua das Flores, 123");
$pessoa1->setCidade("São Paulo");
$pessoa1->setUF("SP");
$pessoa1->setAltura(1.75);

echo $pessoa1->retornaApresentacao() . "\n";

$pessoa2 = new Pessoa();
$pessoa2->setNome("Maria");
$pessoa2->setEndere("Avenida Central, 456");
$pessoa2->setCidade("Rio de Janeiro");
$pessoa2->setUF("RJ");
$pessoa2->setAltura(1.65);

echo $pessoa2->retornaApresentacao();
