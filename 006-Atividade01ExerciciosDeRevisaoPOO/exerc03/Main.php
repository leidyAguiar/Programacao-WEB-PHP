<?php

require('Telefone.php');
require('Celular.php');
require('Fixo.php');
require('PrePago.php');
require('PosPago.php');

$fixo = new Fixo("11", "1111111111");
echo $fixo->__toString();
echo "<hr/>";
echo "Custo da ligação telefone Fixo: " . $fixo->calculaCusto(10);
echo "<hr/>";

$celular1 = new PrePago("18", "4444444444", "Vivo");
$celular2 = new PosPago("88", "55555555555", "Claro");

echo $celular1->__toString();
echo "<hr/>";
echo $celular2->__toString();
echo "<hr/>";

echo "Custo da ligação PrePago: " . $celular1->calculaCusto(10);
echo "<hr/>";

echo "Custo da ligação PosPago: " . $celular2->calculaCusto(10);
echo "<hr/>";

