<?php

include 'conexao.php';

$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$preco_custo = $_POST['preço_custo'];
$preco_venda = $_POST['preço_venda'];

if (isset($_FILES['files'])) {
    $arquivo = $_FILES['files'];

    if ($arquivo['error']) {
        die("Falha ao enviar o arquivo !!! ");
    }

    $pasta = "arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDOArquivo = uniqid();
    $extensao = strtolower(pathinfo($novoNomeDOArquivo,PATHINFO_EXTENSION));

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $pasta . $nomeDoArquivo . "." . $extensao);
}

if (empty($_POST['produto']) || empty($_POST['descricao']) || empty($_POST['preço_custo']) || empty($_POST['preço_venda']) ) {
    header('Location: cadastro_produto.php?parametro=0');
    exit(s);
}

if ( $query = mysqli_query($conexao , "INSERT INTO tb_produto (produto , descricao , PRECO_CUSTO , PRECO_VENDA) VALUES('{$produto}' , '{$descricao}' , '{$preco_custo}' , '{$preco_venda}')")){
    header("Location: loja_i3.php?inclusao=1");
}

?>