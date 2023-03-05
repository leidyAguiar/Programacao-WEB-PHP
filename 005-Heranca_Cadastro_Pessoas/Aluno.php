<?php

class Aluno extends Pessoa
{
    public int $ra;
    public string $curso;
    public string $termo;

    public function __construct(string $nome, string $cpf, string $email, int $ra, string $curso, string $termo)
    {
        parent::__construct($nome, $cpf, $email);
        $this->ra = $ra;
        $this->curso = $curso;
        $this->termo = $termo;
    }

    public function getRegistro(): int
    {
        return $this->ra;
    }

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function getTermo(): string
    {
        return $this->termo;
    }

    public function setRegistro(int $ra): void
    {
        $this->ra = $ra;
    }

    public function setCurso(string $curso): void
    {
        $this->curso = $curso;
    }

    public function setTermo(string $termo): void
    {
        $this->termo = $termo;
    }

    public function __toString()
    {
        return "Nome: {$this->nome} | CPF: {$this->cpf} | E-mail: {$this->email} | RA: {$this->ra} | 
                Curso: {$this->curso} | Termo: {$this->termo}";
    }
}
