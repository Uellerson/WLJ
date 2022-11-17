<?php 
session_start();
include("conexao.php");

$titular = $_POST["titular"];
$numero_cartao = $_POST["numero_cartao"];
$validade = $_POST["validade"];
$cvv = $_POST["cvv"];
$id_usuario = $_SESSION["id_usuario"];

$query_cartao = "INSERT INTO cartao (titular, numero_cartao, validade, cvv, id_usuario)
VALUES(:titular, :numero_cartao, :validade, :cvv, :id_usuario)";

    $cad_cartao = $pdo -> prepare($query_cartao);
    $cad_cartao->bindValue(":titular", $titular);   
    $cad_cartao->bindValue(":numero_cartao", $numero_cartao);
    $cad_cartao->bindValue(":validade", $validade);
    $cad_cartao->bindValue(":cvv", $cvv);
    $cad_cartao->bindValue(":id_usuario", $id_usuario);
    $cad_cartao->execute();

    header ("location: cartoes.php");

    unset($cad_cartao);
    unset($pdo);
    ?>
    
    