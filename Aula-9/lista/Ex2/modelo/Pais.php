<?php

class Pais {

    private $nome ;
    private $continente;


    public function __construct( $nome,  $continente){
        $this->nome = $nome;
        $this->continente = $continente;
    }

    public function getNome()
    {
        return $this->nome;
    }



    public function getContinente()
    {
        return $this->continente;
    }

}