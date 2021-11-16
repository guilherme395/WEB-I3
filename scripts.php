<?php

include_once "conexao.php";

if (isset($_GET['delete_cli'])) {
    $id = $_GET['delete_cli'];
    mysqli_query($conexao , "DELETE FROM tb_cliente where id = '$id'");
    header("Location: clientes.php?delete=2");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conexao , "DELETE FROM tb_produto where id = '$id'");
    header("Location: produtos.php?delete=2");
}

?>