<?php

include_once("conexao.php");

//Atribui a variaveisos valores passado por POST
$usuario =($_POST["usuario"]);
$senha =($_POST["senha"]);

//Faz a consulta na tabela usuario
$query = "SELECT * FROM usuario where usuario = :usuario AND senha = :senha";

//prepara a query
$resultado =  $conn->prepare($query);

$resultado->bindValue(":usuario" , $usuario);
$resultado->bindValue(":senha" , md5($senha));

$resultado->execute();

$numero_registro = $resultado->rowCount();

if ($numero_registro != 0) {
    header("Location: loja_i3.php");
} else {
    header("Location: index.php?error=1");
}

?>