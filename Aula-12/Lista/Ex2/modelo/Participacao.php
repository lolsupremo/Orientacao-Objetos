<?php

require_once 'modelo/Instrumento.php';

class Participacao extends Instrumento
{

    public function getNota()
    {
        $nota = parent::getNota();
        if ($nota >= 10) {
            return 10;
        }
        return $nota;
    }
}