<?php

require_once 'util/Conexao.php';
require_once 'modelo/ClientePF.php';
require_once 'modelo/ClientePJ.php';

/*
$conexao = Conexao::getConexao();

print_r($conexao);
*/
$opcao = null;
$id = 0;
do {
    echo "--- Cadastro dos trouxas ---\n";
    echo "1 - Pessoa Física\n";
    echo "2 - Pessoa Jurídica\n";
    echo "0 - Sair\n";
    echo "Escolha uma opção: ";
    $opcao = readline();

    switch ($opcao) {
        case 1:

            $nomeSocial = readline("Digite o nome social: ");
            $nomeCompleto = readline("Digite o nome completo: ");
            $cpf = readline("Digite o CPF: ");
            $email = readline("Digite o email: ");
            
            $cliente = new ClientePF($nomeCompleto, $cpf, $email, $id, $nomeSocial);
            $id++;  
            
            break;

        case 2:
            echo "Digite o nome social: ";
            $nomeSocial = readline();
            echo "Digite a razão social: ";
            $razaoSocial = readline();
            echo "Digite o CNPJ: ";
            $cnpj = readline();
            echo "Digite o email: ";
            $email = readline();
            
            $cliente = new ClientePJ($razaoSocial, $cnpj, $email, $id, $nomeSocial);
            
            $id++;
            break;
        case 0:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
} while ($opcao != 0);