<?php

class Cidade{

    public $nome;
    public $habitantes;
    public $area;
    public $altitude;
    public $estado;

    function retornaDados() {
        return $this->nome . " | " . $this->habitantes . " | " . $this->area . "km² | " . $this->altitude . "m | " . $this->estado;
        
    }
}

for ($i=0; $i < 5; $i++) { 
    $cidade = new Cidade();
    $cidade->nome = readline("Digite o nome da cidade: ");
    $cidade->habitantes = readline("Digite a quantidade de habitantes: ");
    $cidade->area = readline("Digite a área da cidade: ");
    $cidade->altitude = readline("Digite a altitude da cidade: ");
    $cidade->estado = readline("Digite o estado da cidade: ");

    
}



