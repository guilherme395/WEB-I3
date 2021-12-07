<?php

include 'conexao.php';

$id = $_POST['id'];

if (empty($_GET)) {

    if ( $query = "INSERT INTO 
                        tb_pedido
                    (id, 
                    data_pedido, 
                    id_cli, 
                    total_custo, 
                    total_pedido, 
                    status_pedido, 
                    observacao) 
                    VALUES 
                        ()"){

    if ( $query = "INSERT INTO 
                        tb_itens_pedido
                    (status_item, 
                    id_produto, 
                    quantidade, 
                    preco_unitario, 
                    desconto, 
                    total) 
                    VALUES 
                        ()"){
                            header(Location: carrinho.php);
                        }
}} else {

}

?>