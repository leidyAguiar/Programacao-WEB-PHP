<?php

class Professor extends Pessoa
{

    public string $matricula;
    public string $carga_horaria;
    public string $departamento;
    public float $salario;

    public function __construct(string $nome, string $cpf, string $email, string $matricula, string $carga_horaria, string $departamento, float $salario)
    {
        parent::__construct($nome, $cpf, $email);
        $this->matricula = $matricula;
        $this->carga_horaria = $carga_horaria;
        $this->departamento = $departamento;
        $this->salario = $salario;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function getCarga_horaria(): string
    {
        return $this->carga_horaria;
    }

    public function getDepartamento(): string
    {
        return $this->departamento;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }

    public function setCarga_horaria(string $carga_horaria): void
    {
        $this->carga_horaria = $carga_horaria;
    }

    public function setDepartamento(string $departamento): void
    {
        $this->departamento = $departamento;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function __toString()
    {
        return "Nome: {$this->nome} | CPF: {$this->cpf} | E-mail: {$this->email} | Matrícula: {$this->matricula} | 
                Carga_horaria: {$this->carga_horaria} | Departamento: {$this->departamento} | Salário: {$this->salario}";
    }
}