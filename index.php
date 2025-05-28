<?php

require_once 'vendor/autoload.php';
use Vaghetti\Biblioteca\Livro;
use Vaghetti\Biblioteca\Estante;

echo("Sistema de Biblioteca Iniciado!"."<br>");

$livro1 = new Livro("Sandro Vaghetti", "PHP: The Right Way");
$livro2 = new Livro("George Orwell", "Animal Farm");
$livro3 = new Livro("Paulo Coelho", "A Flor da Terra");
echo'<pre>';

$estante = new Estante();
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);
$estante->adicionarLivro($livro3);

$livro1->marcarComoDisponivel();
$livro2->marcarComoDisponivel();


$livroencontrado = $estante->buscarLivroPorTitulo('a');

print_r($livroencontrado);
echo '<pre>';
var_dump($estante->listarLivrosDisponiveis());