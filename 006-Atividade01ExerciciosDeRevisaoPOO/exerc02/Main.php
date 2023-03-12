<?php

require('Funcionario.php');
require('Motorista.php');
require('Servente.php');
require('MestreDeObras.php');

$m1 = new Motorista("Motorista01", 1, 1000, "1111111111");
$m1->calcularSalario();
echo $m1->__toString();
echo "<hr/>";

$m2 = new Motorista("Motorista02", 2, 1500, "22222222");
$m2->calcularSalario();
echo $m2->__toString();
echo "<hr/>";

$m3 = new Motorista("Motorista03", 3, 2100, "3333333333");
$m3->calcularSalario();
echo $m3->__toString();
echo "<hr/>";

$s1 = new Servente("Servente01", 4, 1000);
$s1->calcularInsalubridade();
echo $s1->__toString();
echo "<hr/>";
$s2 = new Servente("Servente02", 5, 2000);
$s2->calcularInsalubridade();
echo $s2->__toString();
echo "<hr/>";

$mObra1 = new MestreDeObras("MestreDeObras01", 6, 1000, 5);
echo $mObra1->__toString();
echo "<hr/>";
$mObra2 = new MestreDeObras("MestreDeObras02", 7, 1000, 10);
echo $mObra2->__toString();
echo "<hr/>";
$mObra3 = new MestreDeObras("MestreDeObras03", 8, 1000, 15);
echo $mObra3->__toString();
echo "<hr/>";
$mObra4 = new MestreDeObras("MestreDeObras04", 9, 1000, 20);
echo $mObra4->__toString();
echo "<hr/>";
$mObra5 = new MestreDeObras("MestreDeObras05", 10, 1000, 30);
echo $mObra5->__toString();
echo "<hr/>";

