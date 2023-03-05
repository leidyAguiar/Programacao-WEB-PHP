<?php

abstract class Conta
{
    protected string $banco;
    protected string $agencia;
    protected string $numero;
    protected float $saldo;

    function __construct(
        string $banco,
        string $agencia,
        string $numero,
        float $saldo
    ) {
        $this->banco = $banco;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    public function getDetalhes()
    {
        return "Banco: {$this->banco} | Agencia: {$this->agencia} | Conta: {$this->numero} | Saldo: {$this->saldo}";
    }

    public function Depositar(float $valor)
    {
        $this->saldo += $valor;
    }

    public function Sacar(float $valor)
    {
        if ($valor > $this->saldo) {
            return "Saldo insuficiente. Operação cancelada!";
        }

        $this->saldo -= $valor;
        return "Saldo atualizado: {$this->saldo}";
    }
}