<?php

class Motorista extends Funcionario
{
    private string $carteiraMotorista;
    function __construct(string $nome, int $codigo , float $salarioBase, string $carteiraMotorista)
    {
        parent::__construct($nome, $codigo, $salarioBase);
        $this->carteiraMotorista = $carteiraMotorista;
    }
    public function calcularSalario()
    {
        $this->salario = $this->salarioBase + ($this->salarioBase * 0.05);
    }
    public function getCarteiraMotorista()
    {
        return $this->carteiraMotorista;
    }
    public function setCarteiraMotorista($carteiraMotorista)
    {
        $this->carteiraMotorista = $carteiraMotorista;
    }
    public function __toString()
    {
        return "Codigo: {$this->codigo} | 
                Nome: {$this->nome} | 
                Salário Base: {$this->salarioBase} | 
                Salário Liquido: {$this->getSalarioLiquido()} | 
                Carteira Motorista: {$this->carteiraMotorista}";
    }
}