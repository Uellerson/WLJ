<?php

include("conexao.php");
$id_usuario = $_SESSION['id_usuario'];

$comando = $pdo->prepare("SELECT *  FROM favoritos RIGHT JOIN produtos ON favoritos.id_produto=produtos.id_produto WHERE id_usuario = $id_usuario");
$comando->execute();

if ($comando->rowCount() >= 1) {
    $listaItens = $comando->fetchAll();
} else {
    echo("Você não adicionou itens como favoritos");
}

