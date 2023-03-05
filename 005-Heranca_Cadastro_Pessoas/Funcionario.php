<?php

class Funcionario extends Pessoa
{

    public string $matricula;
    public string $regime;
    public float $salario;

    public function __construct(string $nome, string $cpf, string $email, string $matricula, string $regime, float $salario)
    {
        parent::__construct($nome, $cpf, $email);
        $this->matricula = $matricula;
        $this->regime = $regime;
        $this->salario = $salario;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function getRegime(): string
    {
        return $this->regime; //CLT, PJ
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula; 
    }

    public function setRegime(string $regime): void
    {
        $this->regime = $regime; //CLT, PJ
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function updateSalario(float $porcentagem): bool
    {
        $this->salario = $this->salario + ($this->salario * $porcentagem / 100);

        if ($this->salario > 0) {
            return true;
        } else {
            echo "Erro ao atualizar salário";
            return false;
            
        }
    }

    public function __toString()
    {
        return "Nome: {$this->nome} | CPF: {$this->cpf} | E-mail: {$this->email} | Matrícula: {$this->matricula} | 
                Regime: {$this->regime} | Salário: {$this->salario}";
    }
}