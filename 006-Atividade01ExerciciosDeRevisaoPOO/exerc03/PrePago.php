<?php

class PrePago extends Celular {

    function __construct(string $ddd, string $numero, string $nomeOperadora)
    {
        parent::__construct($ddd, $numero, $nomeOperadora);
    }

    public function calculaCusto(float $tempo): float
    {
        return (parent::calculaCusto($tempo) * 1.4); // 40% de acréscimo
    }
}
