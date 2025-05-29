<?php

namespace Vaghetti\Biblioteca;

abstract class Usuario
{
    protected string $nome;
    protected string $tipo;
    protected array $livrosEmprestados = [];

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    abstract function podePegarEmprestado(): bool;

    public function adcionarLivroEmprestado(Livro $livro): void
    {
        if ($this->podePegarEmprestado()) {
            $this->livrosEmprestados[] = $livro;
        } else {
            throw new \Exception('Este usuário não pode pegar livros emprestados');
        }
    }
    public function removerLivroEmprestado(Livro $livro): void
    {
        $this->livrosEmprestados = array_filter(
            $this->livrosEmprestados,
            function ($livroAtual) use ($livro) {}
        );
    }
    public function listarLivrosEmprestados(): array
    {
        return $this->livrosEmprestados;
    }
}
