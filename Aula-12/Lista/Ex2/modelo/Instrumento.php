<?php

class Instrumento{

    protected $nota;

    public function __construct($nota)
    {
        $this->nota = $nota;
    }

    public function getNota()
    {
        return $this->nota;
    }
}