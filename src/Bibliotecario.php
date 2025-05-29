<?php

namespace Vaghetti\Biblioteca;

class Bibliotecario
{
    public static function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        echo '<hr>';
        if (!$livro->estaDisponivel()) {
            throw new \Exception('Livro não está disponível');
            return false;
        }
        if (!$usuario->podePegarEmprestado()) {
            throw new \Exception('Usuário não pode pegar livros emprestados');
            return false;
        }
        if (!$estante->buscarLivroPorTitulo($livro->getTitulo())) {
            throw new \Exception('Livro não encontrado na estante');
            return false;
        }
        $estante->removerLivro($livro);
        $livro->marcarComoEmprestado($usuario);
        $usuario->adcionarLivroEmprestado($livro);
        

        echo '<hr>';
        return true;
    }
    public static function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        if ($livro->estaDisponivel()) {
            throw new \Exception('Livro já está disponível');
            return false;
        }
        if ($estante->verificarLivro($livro)) {
            throw new \Exception('O livro está na estante');
            return false;
        }

        if (!in_array($livro, $usuario->listarLivrosEmprestados())) {
            throw new \Exception('Livro não está com o usuário');
            return false;
        }

        $usuario->removerLivroEmprestado($livro);
        $estante->adicionarLivro($livro);
        $livro->marcarComoDisponivel();


        return true;
    }
}
