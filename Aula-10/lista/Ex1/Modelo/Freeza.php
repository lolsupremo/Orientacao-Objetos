<?php

require_once("IGuerrero.php");

class Freeza implements IGuerrero {
    public function ataque() {
        $opcao = rand(1, 5);
        if ($opcao == 1) {
            return "Meteoro de Gelado!";
        } else if ($opcao == 2) {
            return "Death Beam!";
        } else if ($opcao == 3) {
            return "Super Nova!";
        } else if ($opcao == 4) {
            return "Galick Gun!";
        } else {
            return "Hakai!";
        }
    }

    public function transformacao(int $fase) {
        if ($fase == 1) {
            return "Primeira forma!";
        } 
        if ($fase == 2) {
            return "Segunda forma!";
        }
        if ($fase == 3) {
            return "Terceira forma!";
        }
        if ($fase == 4) {
            return "Forma Final!";
        } 
        if ($fase == 5) {
            return "Forma 100%!";
        }
        if ($fase == 6) {
            return "Forma Dourada!";
        } 
        if ($fase == 7) {
            return "Forma Black!";
        } else {
            return "Você já está na forma mais poderosa!";
        }
    }
}