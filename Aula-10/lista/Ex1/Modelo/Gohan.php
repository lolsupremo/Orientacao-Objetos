<?php

require_once("IGuerrero.php");

class Gohan implements IGuerrero {
    public function ataque() {
        $opcao = rand(1, 5);
        if ($opcao == 1) {
            return "Masenko!";
        } else if ($opcao == 2) {
            return "Kamehameha!";
        } else if ($opcao == 3) {
            return "Special Beam Cannon!";
        } else if ($opcao == 4) {
            return "Kamehameha pai e filho!";
        } else {
            return "Makankosappo!";
        }
    }

    public function transformacao(int $fase) {
        if ($fase == 1) {
            return "Super Saiyajin!";
        } if ($fase == 2) {
            return "Super Saiyajin 2!";
        } if ($fase == 3) {
            return "Ultimate Gohan!";
        } if ($fase == 4) {
            return "Gohan Beast!";
        } if ($fase == 5) {
            return "Super Saiyajin 4!";
        } else {
            return "Você já está na forma mais poderosa!";
        }
        
    }
}