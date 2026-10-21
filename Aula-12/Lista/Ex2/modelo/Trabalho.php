<?php

require_once 'modelo/Instrumento.php';

class Trabalho extends Instrumento
{

    public function getNota()
    {
        $nota = parent::getNota() * 1.2;
        if ($nota >= 10) {
            return 10;
        }
        return $nota;
    }
}