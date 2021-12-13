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

if (isset($_GET['atualizar_pedido'])) {
    $status_pedido = 2;
    $id = $_GET['atualizar_pedido'];
    $query = "UPDATE tb_pedido SET status_pedido = :status_pedido WHERE id = '$id'";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(":status_pedido","$status_pedido");
    $result = $stmt->execute();

    if ($result) {
        header("Location: loja_i3.php?delete=2");
    }
}

if (isset($_GET['atualizar_pedido_para_1'])) {
    $status_pedido = 1;
    $id = $_GET['atualizar_pedido_para_1'];
    $query = "UPDATE tb_pedido SET status_pedido = :status_pedido WHERE id = '$id'";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(":status_pedido","$status_pedido");
    $result = $stmt->execute();

    if ($result) {
        header("Location: loja_i3.php?fechado=2");
    }
}
?>