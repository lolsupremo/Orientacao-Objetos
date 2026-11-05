<?php 

require_once __DIR__.'/Cliente.php';

class ClientePJ extends Cliente{

    private string $razaoSocial;
    private string $cnpj;

    public function __construct(string $razaoSocial, string $cnpj, string $email, int $id, string $nomeSocial)
    {
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
        $this->email = $email;
        $this->id = $id;
        $this->nomeSocial = $nomeSocial;
    }

    public function getNome(): string
    {
        return $this->razaoSocial;
    }

    public function getNroDoc(): string
    {
        return $this->cnpj;
    }

    public function getTipo(): string
    {
        return "Pessoa Jurídica";
    }
    
    public function setRazaoSocial(string $razaoSocial): void
    {
        $this->razaoSocial = $razaoSocial;
    }

    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }
}