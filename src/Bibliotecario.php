<?php

namespace Vaghetti\Biblioteca;

class Bibliotecario
{
    public function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        echo '<hr>';
        if (!$livro->estaDisponivel()) {
            echo '<br>Livro não está disponível!<br>';
            return false;
        }
        if (!$usuario->podePegarEmprestado()) {
            echo '<br>Este usuário não pode pegar livros emprestados!<br>';
            return false;
        }
        if (!$estante->buscarLivroPorTitulo($livro->getTitulo())) {
            echo '<br>Livro já emprestado!<br>';
            return false;
        }
        $livro->marcarComoEmprestado();
        $usuario->adcionarLivroEmprestado($livro);
        $estante->removerLivro($livro);
        echo '<br>Livro emprestado com sucesso!<br>';
        echo '<hr>';
        return true;
    }
    public function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        if ($livro->estaDisponivel()) {
            echo '<br>Livro não está emprestado!<br>';
            return false;
        }
        if ($estante->buscarLivroPorTitulo($livro->getTitulo())) {
            echo '<br>O livro está na estante!<br>';
            return false;
        }
        $usuario->removerLivroEmprestado($livro);
        $estante->adicionarLivro($livro);
        $livro->marcarComoDisponivel();
        echo '<br>Livro devolvido com sucesso!<br>';
        echo '<hr>';
        return true;
    }
}
