<?php

include_once "conexao.php";

if (isset($_GET['delete_cli'])) {
    $id = $_GET['delete_cli'];
    $delete = $conn->prepare("DELETE FROM tb_cliente where id = '$id'");
    $delete->execute();
    header("Location: clientes.php?delete=2");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = $conn->prepare("DELETE FROM tb_produto where id = '$id'");
    $delete->execute();
    header("Location: produtos.php?delete=2");
}

?>