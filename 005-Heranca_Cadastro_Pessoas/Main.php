<?php

require_once 'Pessoa.php';
require_once 'Funcionario.php';

$f1 = new Funcionario("Leidy", "00000000-00", "leidi@gmail.com", "xxx", "CLT", 1000);
echo $f1->__toString();
echo "<hr/>";

echo $f1->updateSalario(10.00);
echo "<hr/>";
echo $f1->__toString();
