<?php


class Pessoa {

    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;


    function falarOla() {
        echo "Olá mundo, sou " . $this->nome . "!\n";
    }

    function falarEndereco() {
        printf("Moro em %s, %s/%s!\n", $this->endereco, 
            $this->cidade, $this->uf);
    }

    function falarAltura() {
        echo "Tenho " . $this->altura . " metros.\n";

    }

} 



$pessoa = new Pessoa();

$pessoa->nome = readline("Informe o nome da pessoa: ");
$pessoa->endereco = readline("Informe o endereço da pessoa: ");
$pessoa->cidade = readline("Informe a cidade da pessoa: ");
$pessoa->uf = readline("Informe o uf da pessoa: ");
$pessoa->altura = readline("Informe a altura da pessoa: ");


$pessoa->falarOla();
$pessoa->falarEndereco();
$pessoa->falarAltura();