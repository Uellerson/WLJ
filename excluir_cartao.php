<?php
    include("conexao.php");

    $id_usuario = $_GET['id_usuario'];
    
    //comando sql.

    $comando = $pdo->prepare("DELETE FROM cartao WHERE id_usuario = :id_usuario");
    // Insira o comando SQL aqui.

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':id_usuario',$id_usuario);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("location:adm_cartoes.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>