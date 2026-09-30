<?php

require_once __DIR__ . '/Produto.php';

class Balde extends Produto {
    private $capacidade;

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    public function getDados() {
        return parent::getDados() . " Capacidade: " . $this->getCapacidade();
    } 
}