<?php

class ContaPoupanca extends Conta
{
    private float $taxa;

    function __construct(string $banco, string $agencia, string $numero, float $saldo, float $taxa)
    {
        parent::__construct($banco, $agencia, $numero, $saldo);
        $this->taxa = $taxa;
    }
}