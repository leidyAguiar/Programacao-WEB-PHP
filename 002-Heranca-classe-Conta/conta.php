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

class ContaPoupanca extends Conta
{
    private float $taxa;

    function __construct(string $banco, string $agencia, string $numero, float $saldo, float $taxa)
    {
        parent::__construct($banco, $agencia, $numero, $saldo);
        $this->taxa = $taxa;
    }
}

//$c1 = new Conta("033", "0033-x", "12345-6", 500.00);

$c1 = new ContaCorrente("033", "0033-x", "12345-6", 500.00, 100);
print_r($c1);
echo "<hr />";

$c2 = new ContaPoupanca("033", "0033-x", "12345-6", 500.00, 1.00);
print_r($c2);
echo "<hr />";
// echo $c1->getDetalhesCC();
// echo "<hr />";
// $c1->Depositar(100.00);
// echo $c1->getDetalhesCC();
// echo "<hr />";
// echo $c1->Sacar(300.00);
// echo "<hr />";
// echo $c1->getDetalhesCC();
// echo "<hr />";
// echo $c1->Sacar(400.00);
// echo "<hr />";
// echo $c1->getDetalhesCC();
// echo "<hr />";
