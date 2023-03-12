<?php
class PosPago extends Celular
{
    function __construct(string $ddd, string $numero, string $nomeOperadora)
    {
        parent::__construct($ddd, $numero, $nomeOperadora);
        self::$custoMinuto;
    }
    public function calculaCusto(float $tempo): float
    {
        return (parent::calculaCusto($tempo) * 0.9); // 10% de desconto
    }
}
