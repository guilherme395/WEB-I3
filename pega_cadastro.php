<?php

include 'conexao.php';

//atribuição de valores no momento que e foi feita a requisição 
$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$preco_custo = $_POST['preco_custo'];
$preco_venda = $_POST['preco_venda'];
$path_arquivo = $_FILES['arquivo'];

preg_match("/\.(png|jpg|jpeg){1}$/i", $path_arquivo["name"], $ext);

    if ($ext == true) {
        $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
        $caminho_arquivo = "upload/" . $nome_arquivo;
        move_uploaded_file($path_arquivo["tmp_name"], $caminho_arquivo);

    }



//Se a $_GET estiver vazio, o if faz o insert do produto, caso contrario, faz um update no mesmo
if (empty($_GET)) {

    if ( $query = mysqli_query($conexao , "INSERT INTO
                                             tb_produto (produto , descricao , PRECO_CUSTO , PRECO_VENDA , path_arquivo) 
                                            VALUES
                                             ('{$produto}' , '{$descricao}' , '{$preco_custo}' , '{$preco_venda}' , '{$caminho_arquivo}')")){

                                            header("Location: loja_i3.php?inclusao=1");
    }

} else {

    $id_update = $_GET['id'];

    preg_match("/\.(png|jpg|jpeg){1}$/i", $path_arquivo["name"], $ext);

    if ($ext == true) {
        $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
        $caminho_arquivo = "upload/" . $nome_arquivo;
        move_uploaded_file($path_arquivo["tmp_name"], $caminho_arquivo);

    }

    if ( $query = mysqli_query($conexao , "UPDATE
                                                tb_produto 
                                            SET
                                                produto = '{$produto}' , 
                                                descricao = '{$descricao}' , 
                                                PRECO_CUSTO = '{$preco_custo}' , 
                                                PRECO_VENDA = '{$preco_venda}' ,
                                                path_arquivo = '{$caminho_arquivo}'
                                            WHERE
                                                id = " . $id_update)){

header("Location: loja_i3.php?inclusao=2");
    }
}


?>