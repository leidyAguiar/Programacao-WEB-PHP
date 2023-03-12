<?php
abstract class Celular extends Telefone {

    protected static float $custoMinuto = 1.0; // R$ 1,00 por minuto
    protected string $nomeOperadora;

    public function __construct(string $ddd, string $numero, string $nomeOperadora)
    {
        parent::__construct($ddd, $numero);
        $this->nomeOperadora = $nomeOperadora;
        self::$custoMinuto;
    }

    public function getnomeOperadora(): string
    {
        return $this->nomeOperadora;
    }

    public function setnomeOperadora(string $nomeOperadora): void
    {
        $this->nomeOperadora = $nomeOperadora;
    }

    public function calculaCusto(float $tempo): float
    {
        return self::$custoMinuto * $tempo;
    }
    
    public function __toString(): string
    {
        return "DDD: {$this->ddd} | 
                Número Telefone: {$this->numero} | 
                Nome Operadora: {$this->nomeOperadora}";
    }
}