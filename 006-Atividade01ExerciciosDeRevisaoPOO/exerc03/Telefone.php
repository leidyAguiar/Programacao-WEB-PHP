<?php

abstract class Telefone {
    protected string $ddd;
    protected string $numero;

    function __construct(string $ddd, string $numero)
    {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public function getDdd(): string
    {
        return $this->ddd;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setDdd(string $ddd): void
    {
        $this->ddd = $ddd;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    abstract public function calculaCusto(float $tempo): float;
    
    public function __toString(): string
    {
        return "DDD: {$this->ddd} | Número de Telefone: {$this->numero}";
    }
}