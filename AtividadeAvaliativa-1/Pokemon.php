<?php

$dinhero = 1000;

class Pokemon
{

    public $nome;
    public $tipo;
    public $experiencia;
    public $ataque;
    public $defesa;
    public $pontosVida;
    public $velocidade;
    public $nivel;


    function batalha()
    {
        if (rand(1, 100) <= 50) {
            return "O pokemon " . $this->nome . " venceu a batalha!";
            $this->experiencia += rand(10, 50);
            $dinhero += rand(100, 500);
            aumentarNivel();
        } else {
            return "O pokemon " . $this->nome . " perdeu a batalha!";
            $dinhero -= rand(100, 500);
        }
    } 
    function aumentarstatus()
    {
        $this->ataque += rand(1, 3);
        $this->defesa += rand(1, 3);
        $this->pontosVida += rand(1, 5);
        $this->velocidade += rand(1, 2);
    }
    function aumentarNivel()
    {
        if ($this->nivel <= 100) {
            if ($this->experiencia >= 100) {
                $this->nivel += 1;
                $this->experiencia -= 100;
                $this->aumentarstatus();
            }
        }
    }
   
}

print "Bem-vindo ao mundo dos pokemons! Você tem R$" . $dinhero . " \npara gastar em pokebolas, poções e outros itens para ajudar seus pokemons a vencerem as batalhas!";

print "Digite o seu nome: ";

print "Escolha o seu pokemon inicial: \n1 - Charmander\n2 - Squirtle\n Desculpe, mas estamos sem o bulbasaur no momento pois o ultimo treinado era um nerdola que queria fazer nuzlock. \n\n";

$escolha = readline("Digite o número do pokemon escolhido: ");
if ($escolha == 1) {
    $pokemon = new Pokemon();
    $pokemon->nome = "Charmander";
    $pokemon->tipo = "Fogo";
    $pokemon->experiencia = 0;
    $pokemon->ataque = 10;
    $pokemon->defesa = 8;
    $pokemon->pontosVida = 39;
    $pokemon->velocidade = 65;
    $pokemon->nivel = 1;
} elseif ($escolha == 2) {
    $pokemon = new Pokemon();
    $pokemon->nome = "Squirtle";
    $pokemon->tipo = "Água";
    $pokemon->experiencia = 0;
    $pokemon->ataque = 8;
    $pokemon->defesa = 10;
    $pokemon->pontosVida = 44;
    $pokemon->velocidade = 43;
    $pokemon->nivel = 1;
} else {
    print "Opção inválida. Por favor, escolha um pokemon válido.";
}

system('clear');


