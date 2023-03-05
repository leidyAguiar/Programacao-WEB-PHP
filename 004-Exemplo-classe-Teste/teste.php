<?php

class Teste
{
    private int $a;
    private int $b;

    public function __construct(int $a, int $b)
    {
        //$this->a = $a;
        //$this->b = $b;
        $this->setA($a);
        $this->setB($b);
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setA(int $a)
    {
        $this->a = $a;
    }

    public function setB(int $b)
    {
        $this->b = $b;
    }

    public function Soma(int $valor)
    {
        return $this->a + $this->b + $valor;
    }
}

$obj = new Teste(10, 5);
$valor = 20;
print_r($obj);
echo "<hr>";
echo "Resultado: {$obj->getA()} + {$obj->getB()} + {$valor} = {$obj->Soma($valor)}.";
