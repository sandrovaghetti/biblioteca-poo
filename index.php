<?php

require_once 'vendor/autoload.php';

use Vaghetti\Biblioteca\Livro;
use Vaghetti\Biblioteca\Estante;
use Vaghetti\Biblioteca\Aluno;
use Vaghetti\Biblioteca\Professor;
use Vaghetti\Biblioteca\Bibliotecario;

echo ("Sistema de Biblioteca Iniciado!" . "<br>");

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

$aluno = new Aluno('Julia Ucker');
$aluno2 = new Aluno('Sandro Vaghetti');

$bibliotecario = new Bibliotecario();  

$bibliotecario->emprestarLivro($aluno, $livro1, $estante);
$bibliotecario->devolverLivro($aluno, $livro1, $estante);
$bibliotecario->emprestarLivro($aluno, $livro1, $estante);


