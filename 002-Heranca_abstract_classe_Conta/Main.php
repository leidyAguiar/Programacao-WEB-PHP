<?php

require_once 'Conta.php';
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

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
