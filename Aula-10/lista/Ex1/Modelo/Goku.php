<?php

require_once("IGuerrero.php");

class Goku implements IGuerrero {
    public function ataque() {
        $opcao = rand(1, 5);
        if ($opcao == 1) {
            return "Kamehameha!";
        } else if ($opcao == 2) {
            return "Genki Dama!";
        } else if ($opcao == 3) {
            return "Kaioken!";
        } else if ($opcao == 4) {
            return "Punho do Dragão!";
        } else {
            return "Hakai!";
        }
    }

    public function transformacao(int $fase) {
        if ($fase == 1) {
            return "Super Saiyajin!";
        } if ($fase == 2) {
            return "Super Saiyajin 2!";
        } if ($fase == 3) {
            return "Super Saiyajin 3!";
        }
        if ($fase == 4) {
            return "Super Saiyajin 4!";
        } 
        if ($fase == 5) {
            return "Super Saiyajin God!";
        } 
        if ($fase == 6) {
            return "Super Saiyajin Blue!";
        } 
        if ($fase == 7) {
            return "Ultra Instinto!";
        } else {
            return "Você já está na forma mais poderosa!";
        }
    }
}