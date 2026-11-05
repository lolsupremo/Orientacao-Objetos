<?php

    require_once __DIR__ . "/modelo/Desenvolvedor.php";
    require_once __DIR__ . "/modelo/Estagiario.php";
    require_once __DIR__ . "/modelo/Gerente.php";

do {
    echo "======================================================
     Sistema empresarial catapimbas do sul
     1 - Gerente
     2 - Desenvolverdor
     3 - Estagiário
     0 - Sair\n";
     $opcao = readline();

    $nome = null;

     $cargo = null;

     switch ($opcao) {
        case '1':
                $cargo = new Gerente($nome);
            break;

        case '2':
                $cargo = new Desenvolvedor($nome);
            break;
        
        case '3':
                $cargo = new Estagiario($nome);
            break;

        default:
            echo "Selecione a desgraça de uma opção valida e meu pagamento esta atrasado";
            break;
     }
    if ($opcao > 0 and $opcao < 4) {
        $nome = readline("Digite o nome do funcionario: ");
        $cargo->setNome($nome);
        echo $cargo;
    }
     
} while ($opcao != 0);