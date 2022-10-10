<?php
    include("conexao.php");

    $email = $_POST["email"];
    $senha = MD5($_POST["senha"]);
    $comando = $pdo -> prepare("INSERT INTO usuario (email, senha) VALUES(:email, :senha )");
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);    
    $comando->execute();                               

    header("Location:login.html");
?>