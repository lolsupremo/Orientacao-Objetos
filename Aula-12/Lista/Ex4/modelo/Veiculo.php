<?php

abstract class Veiculo {

    protected $TarifaKm;
    protected $TatifaViagem;
    protected $TipoVeiculo;
    
    public function getTarifaKm(): float
    {
        return $this->TarifaKm;
    }

    public function getTarifaViagem(): float
    {
        return $this->TatifaViagem;
    }

    public function getTipoVeiculo(): string
    {
        return $this->TipoVeiculo;
    }

    public function calcularPrecoViagem(float $distancia): float
    {
        return $this->TatifaViagem + ($this->TarifaKm * $distancia);
    }


    public function setTarifaKm($TarifaKm): self
    {
        $this->TarifaKm = $TarifaKm;

        return $this;
    }

    public function setTatifaViagem($TatifaViagem): self
    {
        $this->TatifaViagem = $TatifaViagem;

        return $this;
    }

    public function setTipoVeiculo($TipoVeiculo): self
    {
        $this->TipoVeiculo = $TipoVeiculo;

        return $this;
    }
}