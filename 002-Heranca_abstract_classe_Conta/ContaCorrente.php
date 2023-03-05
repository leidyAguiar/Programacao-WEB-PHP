<?php

class ContaCorrente extends Conta
{
    private float $limite;

    function __construct(string $banco, string $agencia, string $numero, float $saldo, float $limite)
    {
        parent::__construct($banco, $agencia, $numero, $saldo);
        $this->limite = $limite;
    }

    public function getDetalhesCC()
    {
        return "Banco: {$this->banco} | Agencia: {$this->agencia} | Conta: {$this->numero} 
        | Limite: {$this->limite} | Saldo: {$this->saldo}";
    }
}