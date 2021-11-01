<?php

include 'conexao.php';

$produto = $_POST['produto'];
$descricao = $_POST['descricao'];

if ( $query = mysqli_query($conexao , "INSERT INTO tb_produto (produto , descricao) VALUES('{$produto}' , '{$descricao}')")){
    header("Location: loja_i3.php");
    echo '<script> alert("Produto cadastrado com sucesso !! "); </script>';
} else {
    echo '<script> alert("Error no Insert do Item , tente novamente !! "); </script>';
}

?>