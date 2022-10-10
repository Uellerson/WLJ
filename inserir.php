<?php
    include("conexao.php");

    $email = $_POST["email"];
    $senha = MD5($_POST["senha"]);
    $comando = $pdo -> prepare("INSERT INTO usuario (nome, sobrenome, email, senha,  telefone, data_nascimento, endereco, ) VALUES(:nome, :email, :senha )");
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);    
    $comando->execute();                               

    header("Location:index.html");
?>