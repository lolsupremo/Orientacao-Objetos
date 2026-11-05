<?php 

require_once __DIR__.'/Cliente.php';

class ClientePF extends Cliente{

    private string $nomeCompleto;
    private string $cpf;

    public function __construct(string $nomeCompleto, string $cpf, string $email, int $id, string $nomeSocial)
    {
        $this->nomeCompleto = $nomeCompleto;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->id = $id;
        $this->nomeSocial = $nomeSocial;
    }
    
        
    

    public function getNome(): string
    {
        return $this->nomeCompleto;
    }

    public function getNroDoc(): string
    {
        return $this->cpf;
    }

    public function getTipo(): string
    {
        return "Pessoa Física";
    }

    public function setNomeCompleto(string $nomeCompleto): void
    {
        $this->nomeCompleto = $nomeCompleto;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
}