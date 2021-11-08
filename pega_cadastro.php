<?php

include 'conexao.php';

//atribuição de valores no momento que e foi a requisição 
$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$preco_custo = $_POST['preço_custo'];
$preco_venda = $_POST['preço_venda'];

//Verfica se existe arquivo do tipo FILE , se caso existir ela entra no blobo IF
if (isset($_FILES['files'])) {
    $arquivo = $_FILES['files'];

    if ($arquivo['error']) {
        die("Falha ao enviar o arquivo !!! ");
    }

    $pasta = "upload/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDOArquivo = uniqid();
    $extensao = strtolower(pathinfo($novoNomeDOArquivo,PATHINFO_EXTENSION));

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $pasta . $nomeDoArquivo . "." . $extensao);

    if ($deu_certo) {
        $sql = "INSERT INTO ";
        mysqli_query($conexao, $sql);
    } else {
        echo ' Erro ao salvar a imagem';
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