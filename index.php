<?php

require_once 'vendor/autoload.php';
use Vaghetti\Biblioteca\Livro;
use Vaghetti\Biblioteca\Estante;
use Vaghetti\Biblioteca\Aluno;
use Vaghetti\Biblioteca\Professor;
use Vaghetti\Biblioteca\Visitante;

echo("Sistema de Biblioteca Iniciado!"."<br>");

$livro1 = new Livro("Sandro Vaghetti", "PHP: The Right Way");
$livro2 = new Livro("George Orwell", "Animal Farm");
$livro3 = new Livro("Paulo Coelho", "A Flor da Terra");
$livro1->marcarComoDisponivel();
$livro2->marcarComoDisponivel();

$estante = new Estante();
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);
$estante->adicionarLivro($livro3);

$livroencontrado = $estante->buscarLivroPorTitulo('PHP');

$aluno = new Visitante('Julia Ucker');
if ($aluno->podePegarEmprestado()) {
    echo 'Pode pegar livros emprestados!';
    $aluno->adcionarLivroEmprestado($livro1);
} else {
    echo 'Não pode pegar livros emprestados!';
}

// $aluno->adcionarLivroEmprestado($livro2);
// $aluno->adcionarLivroEmprestado($livro3);

echo '<pre>';
var_dump($aluno->podePegarEmprestado());
