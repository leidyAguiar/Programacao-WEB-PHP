<?php

class Funcionario
{
    protected String $nome;
    protected int $codigo;
    protected float $salarioBase;
    function __construct(String $nome, int $codigo, float $salarioBase)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->salarioBase = $salarioBase;
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function getCodigo(): int
    {
        return $this->codigo;
    }
    public function getSalarioBase(): float
    {
        return $this->salarioBase;
    }
    public function setSalarioBase(float $salarioBase): void
    {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido(): float
    {
        $inss = $this->salarioBase * 0.1;
        $ir = 0.0;

        if ($this->salarioBase > 2000) {
            $ir = ($this->salarioBase - 2000) * 0.12;
        }
        return $this->salarioBase - $inss - $ir;
    }
    public function __toString()
    {
        return "Nome: {$this->nome} | 
                Codigo: {$this->codigo} | 
                Salário Base: {$this->salarioBase} | 
                Salário Liquido: {$this->getSalarioLiquido()}";
    }
}
