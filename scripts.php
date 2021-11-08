<?php

include_once "conexao.php";

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conexao , "DELETE FROM tb_produto where id = '$id'");
    header("Location: produtos.php?delete=2");
}

?>