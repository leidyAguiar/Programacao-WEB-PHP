<?php

class MestreDeObras extends Servente
{
    private $funcionarios;
    function __construct(string $nome, int $codigo, float $salarioBase, $funcionarios)
    {
        parent::__construct($nome, $codigo, $salarioBase);
        $this->funcionarios = $funcionarios;
    }


    public function calcularSalario()
    {
        if ($this->funcionarios >= 10) {
            $this->salarioBase = $this->salarioBase + ($this->salarioBase * 0.1 * intval($this->funcionarios / 10));
        }
        return $this->salarioBase;
    }
    public function getFuncionarios()
    {
        return $this->funcionarios;
    }
    public function setFuncionarios($funcionarios)
    {
        $this->funcionarios = $funcionarios;
    }
    public function __toString()
    {
        return "Codigo: {$this->codigo} | 
                Nome: {$this->nome} | 
                Salário Base: {$this->salarioBase} | 
                Salário Liquido: {$this->calcularSalario()} |
                Funcionarios: {$this->funcionarios}";
    }
}
