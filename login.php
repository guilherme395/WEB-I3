<?php
include ('conexao.php');

// o if verifica se os inputs estão vazios , caso esteja , o usuario é redirecionado para a index de login.
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit(s);
}

// Atribui o valor passado via POST a variaveis 
$usuario = mysqli_real_escape_string($conexao , $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao , $_POST['senha']);

//Faz a verificação dentro do banco , se caso o "Usuario && senha" for compativéis o usuario e aútenticado 
$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5 ('{$senha}') ";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: loja_i3.php');
    exit();
} else {
    header('Location: index.php?login%=%erro');
    exit();
}

?>