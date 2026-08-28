<?php

require_once "Animal.php";

class Cachorro extends Animal {
    
    public function Latir(){
        return "O cachorro " . $this->nome . " está latindo!";
    }
}