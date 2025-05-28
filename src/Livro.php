<?php

namespace Vaghetti\Biblioteca;

class Livro
{
    //Propriedades Privadas do Livro
    private string $titulo;
    private string $autor;
    private bool $disponivel = false;

    //Construtor do Livro
    public function __construct(string $autor, string $titulo)
    {
        $this->autor = $autor;
        $this->titulo = $titulo;
    }
    //Metodos de estado do Livro - Alteram o estado do livro
    public function marcarComoEmprestado()
    {
        $this->disponivel = false;
    }
    public function marcarComoDisponivel()
    {
        $this->disponivel = true;
    }
    //Metodos de negocios do Livro
    public function estaDisponivel()
    {
        return $this->disponivel;
    }
    //Metodos getters do Livro
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }
}
