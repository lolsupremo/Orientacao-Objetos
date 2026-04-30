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

system('cls');

print "Você escolheu o pokemon " . $pokemon->nome . " do tipo " . $pokemon->tipo . ". \n\n";

while (true) {
    system('cls');
    print "O que você deseja fazer? \n1 - Batalhar\n2 - Ver status do pokemon\n3 - Sair do jogo\n";
    $opcao = readline("Digite o número da opção desejada: ");
    if ($opcao == 1) {
        print $pokemon->batalha() . "\n\n";
    } elseif ($opcao == 2) {
        print "Nome: " . $pokemon->nome . "\n";
        print "Tipo: " . $pokemon->tipo . "\n";
        print "Experiência: " . $pokemon->experiencia . "\n";
        print "Ataque: " . $pokemon->ataque . "\n";
        print "Defesa: " . $pokemon->defesa . "\n";
        print "Pontos de Vida: " . $pokemon->pontosVida . "\n";
        print "Velocidade: " . $pokemon->velocidade . "\n";
        print "Nível: " . $pokemon->nivel . "\n\n";
        readline("Pressione Enter para continuar...");
    } elseif ($opcao == 3) {
        print "Obrigado por jogar! Até a próxima!";
        sleep(4);
        break;
    } else {
        print "Opção inválida. Por favor, escolha uma opção válida.\n\n";
    }
}


