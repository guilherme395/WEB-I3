<?php

include 'conexao.php';

$produto = $_POST['produto'];
$descricao = $_POST['descricao'];

$query = mysqli_query($conexao , "INSERT INTO tb_produto (produto , descricao) VALUES('{$produto}' , '{$descricao}')");

?>