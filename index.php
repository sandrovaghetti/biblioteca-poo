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

print_r($estante);
echo '<hr>';
$estante->removerLivro($livro1);
print_r($estante);

// echo 'Livro: '.$livro->getTitulo().'<br>';
// echo 'Autor: '.$livro->getAutor().'<br>';
// echo 'Disponivel: '.($livro->estaDisponivel() ? 'Sim' : 'Não').'<br>';

?>