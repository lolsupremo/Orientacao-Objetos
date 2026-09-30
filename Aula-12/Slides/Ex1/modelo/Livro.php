<?php

require_once __DIR__ . '/Produto.php';

class Livro extends Produto {
    private $autor;
    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getDados() {
        return "Descrição: " . $this->getDescricao() . " Unidade de Medida: " . $this->getUnidadeMedida() . " Autor: " . $this->getAutor();
    }
}