<?php

abstract class Cliente{

    protected int $id;
    protected string $nomeSocial;
    protected string $email;

    public abstract function getNome();
    public abstract function getNroDoc();
    public abstract function getTipo();

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNomeSocial(): string
    {
        return $this->nomeSocial;
    }

    public function setNomeSocial(string $nomeSocial): void
    {
        $this->nomeSocial = $nomeSocial;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    
}