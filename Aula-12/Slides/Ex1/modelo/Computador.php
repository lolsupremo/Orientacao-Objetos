<?php

require_once __DIR__ . '/Produto.php';

class Computador extends Produto {
    private $processador;
    private $memoria;

    /**
     * Get the value of processador
     */
    public function getProcessador()
    {
        return $this->processador;
    }

    /**
     * Set the value of processador
     */
    public function setProcessador($processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    /**
     * Get the value of memoria
     */
    public function getMemoria()
    {
        return $this->memoria;
    }

    /**
     * Set the value of memoria
     */
    public function setMemoria($memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }

    public function getDados() {
        return "Descrição: " . $this->getDescricao() . " Unidade de Medida: " . $this->getUnidadeMedida() . " Processador: " . $this->getProcessador() . " Memória: " . $this->getMemoria();
    }
}