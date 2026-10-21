<?php

require_once 'modelo/Instrumento.php';

class Prova extends Instrumento
{

    public function getNota()
    {
        $nota = parent::getNota() * 1.3;
        if ($nota >= 10) {
            return 10;
        }
        return $nota;
    }
}