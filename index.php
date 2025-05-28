<?php

require_once 'vendor/autoload.php';
use Vaghetti\Biblioteca\Livro;

echo("Sistema de Biblioteca Iniciado!"."<br>");

$livro = new Livro("Sandro Vaghetti", "PHP: The Right Way");
echo'<pre>';

echo 'Livro: '.$livro->getTitulo().'<br>';
echo 'Autor: '.$livro->getAutor().'<br>';
echo 'Disponivel: '.($livro->estaDisponivel() ? 'Sim' : 'Não').'<br>';

?>