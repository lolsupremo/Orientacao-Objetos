<?php

class Prato {
    private $nome;
    private $quantidade;
    private $preco;

    public function __construct($nome, $quantidade, $preco) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }

    public function __toString() {
        return sprintf("Prato: %s\nQuantidade: %d\nPreço Unitário: R$ %.2f\n", $this->nome, $this->quantidade, $this->preco);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getValorTotal() {
        return $this->quantidade * $this->preco;
    }   
}

$prato1 = new Prato("Strogonoff", 2, 5.00);
$prato2 = new Prato("Pizza", 3, 4.00);
$prato3 = new Prato("Lasanha", 1, 15.00);

$pratos = [$prato1, $prato2, $prato3];

$valorTotal = 0;
foreach ($pratos as $prato) {
    echo $prato;
    $valorTotal += $prato->getValorTotal();
}

