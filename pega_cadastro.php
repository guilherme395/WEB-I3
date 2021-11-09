<?php

include 'conexao.php';

//atribuição de valores no momento que e foi a requisição 
$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$preco_custo = $_POST['preço_custo'];
$preco_venda = $_POST['preço_venda'];

if (isset($_FILES['arquivo'])) {

    $arquivo = $_FILES['arquivo']['name'];

    $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));

    $novo_nome = md5(time()) . " . " . $extensao;

    $diretorio = "upload/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

    $query = "INSERT INTO arquivo(id , path) VALUES('','$novo_nome', NOW())";

    if (mysqli_query($conexao, $query)) {
       $$msg = "arquivo enviado com sucesso";
    }



}

//Verfica se os inputs estão vazios
if (empty($_POST['produto']) || empty($_POST['descricao']) || empty($_POST['preço_custo']) || empty($_POST['preço_venda']) ) {
    header('Location: cadastro_produto.php?parametro=0');
    exit(s);
}

//Se a $_GET estiver vazio, o if faz o insert do produto, caso contrario, faz um update no mesmo
if (empty($_GET)) {

    if ( $query = mysqli_query($conexao , "INSERT INTO
                                             tb_produto (produto , descricao , PRECO_CUSTO , PRECO_VENDA) 
                                            VALUES
                                             ('{$produto}' , '{$descricao}' , '{$preco_custo}' , '{$preco_venda}')")){

                                            header("Location: loja_i3.php?inclusao=1");
    }

} else {

    $id_update = $_GET['id'];

    if ( $query = mysqli_query($conexao , "UPDATE
                                                tb_produto 
                                            SET
                                                produto = '{$produto}' , 
                                                descricao = '{$descricao}' , 
                                                PRECO_CUSTO = '{$preco_custo}' , 
                                                PRECO_VENDA = '{$preco_venda}'
                                            WHERE
                                                id = " . $id_update)){

header("Location: loja_i3.php?inclusao=2");
    }
}


?>