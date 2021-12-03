<?php

include 'conexao.php';

$id = $_POST['id'];


if (empty($_GET)) {

    if ( $query = mysqli_query($conexao , "INSERT INTO 
                                                `tb_pedido`(`id`, `data_pedido`, `id_cli`, `total_custo`, `total_pedido`, `status_pedido`, `observacao`) 
                                            VALUES 
                                                (NOW() , '{$id}' , ")){

    if ( $query = mysqli_query($conexao , "INSERT INTO 
                                                `tb_itens_pedido`(`id`, `status_item`, `id_produto`, `quantidade`, `preco_unitario`, `desconto`, `total`) 
                                            VALUES 
                                                ()")){
                                                header(Location: carrinho.php);
                                        }
}} else {
    echo "ola ";     
}

?>