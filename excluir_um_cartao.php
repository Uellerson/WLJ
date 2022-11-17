<?php
    include("conexao.php");

    $id = $_GET['id'];
    
    //comando sql.

    $comando = $pdo->prepare("DELETE FROM cartao WHERE id = :id");
    // Insira o comando SQL aqui.

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':id',$id);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("location:cartoes.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>