<?php

abstract class Conta
{
    protected string $banco;
    protected string $agencia;
    protected string $numero;
    protected float $saldo;

    function __construct(string $banco, string $agencia, string $numero, float $saldo)
    {
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

    abstract public function Sacar(float $valor);
}

class ContaCorrente extends Conta
{
    private float $limite;

    function __construct(string $banco, string $agencia, string $numero, float $saldo, float $limite)
    {
        parent::__construct($banco, $agencia, $numero, $saldo);
        $this->limite = $limite;
    }

    public function getDetalhes()
    {
        $saldototal = $this->saldo + $this->limite;

        return "Banco: {$this->banco} | Agencia: {$this->agencia} | Conta: {$this->numero} | Saldo: {$this->saldo} | Limite: {$this->limite} | Saldo Total: {$saldototal}";
    }

    public function Sacar(float $valor)
    {
        if ($valor > $this->saldo + $this->limite) {
            return "Saldo insuficiente. Operação cancelada!";
        }

        $this->saldo -= $valor;
        return "Saque efetuado, saldo atualizado: {$this->saldo}";
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

    public function Sacar(float $valor)
    {
        if ($valor > $this->saldo) {
            return "Saldo insuficiente. Operação cancelada!";
        }

        $this->saldo -= $valor;
        return "Saque efetuado, saldo atualizado: {$this->saldo}";
    }

    public function getDetalhes()
    {
        $saldototal = $this->saldo + ($this->saldo * $this->taxa / 100.00);

        return "Banco: {$this->banco} | Agencia: {$this->agencia} | Conta: {$this->numero} | Taxa: {$this->taxa}% | Saldo: {$saldototal}";
    }
}

// $c1 = new Conta("033", "0033-x", "12345-6", 500.00);

echo "<h3>Objeto C1</h3>";
$c1 = new ContaCorrente("033", "1111-x", "12345-6", 500.00, 100.00);
print_r($c1);
echo "<br /><br />";
echo $c1->getDetalhes();

echo "<br /><br />";
echo "<hr />";

echo "<h3>Objeto C2</h3>";
$c2 = new ContaPoupanca("033", "2222-x", "12345-6", 500.00, 10.00);
print_r($c2);
echo "<br /><br />";
echo $c2->getDetalhes();

echo "<br /><br />";
echo "<hr />";

echo "<h3>Operação em C1: Depósito de 100 e saque de 300</h3>";
$c1->Depositar(100.00);
echo $c1->getDetalhes();
echo "<br /><br />";
echo $c1->Sacar(300.00);
echo "<br /><br />";
echo $c1->getDetalhes();

echo "<br /><br />";
echo "<hr />";

echo "<h3>Operação em C2: Depósito de 100 e saque de 300</h3>";
$c2->Depositar(100.00);
echo $c2->getDetalhes();
echo "<br /><br />";
echo $c2->Sacar(300.00);
echo "<br /><br />";
echo $c2->getDetalhes();

echo "<br /><br />";
echo "<hr />";

echo "<h3>Operação em C1: saque de 380</h3>";
echo $c1->getDetalhes();
echo "<br /><br />";
echo $c1->Sacar(380.00);
echo "<br /><br />";
echo $c1->getDetalhes();

echo "<br /><br />";
echo "<hr />";

echo "<h3>Operação em C2: saque de 380</h3>";
echo $c2->getDetalhes();
echo "<br /><br />";
echo $c2->Sacar(380.00);
echo "<br /><br />";
echo $c2->getDetalhes();
echo "<br /><br />";
echo "<br /><br />";