<?php
class Fixo extends Telefone
{
    protected static float $custoMinuto = 0.5; // R$ 0,50 por minuto
    function __construct(string $ddd, string $numero)
    {
        parent::__construct($ddd, $numero);
    }
    public function calculaCusto(float $tempo): float
    {
        return self::$custoMinuto * $tempo;
    }
}