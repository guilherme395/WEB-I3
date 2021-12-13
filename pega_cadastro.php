<?php

include 'conexao.php';

//atribuição de valores  
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

//Se a $_GET estiver vazio, o if faz o insert do PRODUTO, caso contrario, faz um update no mesmo
if (empty($_GET)) {

if ( $query = "INSERT INTO 
                        `tb_produto`
                    (produto,
                    descricao, 
                    preco_custo, 
                    preco_venda,
                    path_arquivo) 
                VALUES
                    (:produto,
                      :descricao,
                      :preco_custo,
                      :preco_venda,
                      :path_arquivo)")
                          
                    $stmt = $conn->prepare($query);

                    $stmt->bindValue(":produto","$produto");
                    $stmt->bindValue(":descricao","$descricao");
                    $stmt->bindValue(":preco_custo","$preco_custo");
                    $stmt->bindValue(":preco_venda","$preco_venda");
                    $stmt->bindValue(":path_arquivo","$caminho_arquivo");
                    
                    $result = $stmt->execute(); {

                    header("Location: loja_i3.php?inclusao=1");
}} else {

$id_update = $_GET['id'];

$query = "UPDATE 
            tb_produto
          SET 
            produto = :produto ,
            descricao = :descricao ,
            preco_custo = :preco_custo ,
            preco_venda = :preco_venda ,
            path_arquivo = :path_arquivo
          WHERE
            id = " . $id_update;

$stmt = $conn->prepare($query);

$stmt->bindValue(":produto","$produto");
$stmt->bindValue(":descricao","$descricao");
$stmt->bindValue(":preco_custo","$preco_custo");
$stmt->bindValue(":preco_venda","$preco_venda");
$stmt->bindValue(":path_arquivo","$caminho_arquivo");

$result = $stmt->execute();

if ($result) {
    header("Location: loja_i3.php?inclusao=2");
}
}

?>