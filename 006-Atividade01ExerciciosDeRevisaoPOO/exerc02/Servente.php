<?php

class Servente extends Funcionario {

    function __construct(string $nome, int $codigo , float $salarioBase)
    {
        parent::__construct($nome, $codigo, $salarioBase);
    }
    
    public function calcularInsalubridade()
    {
        $this->salario = $this->salarioBase + ($this->salarioBase * 0.05);
        return $this->salario;
    }
}