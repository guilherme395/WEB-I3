<?php

include 'conexao.php';

$id_cli = $_POST["id_cli"];
$quantidade = $_POST["quantidade"];
$preco_venda = $_POST['preco_venda'];
$id_produto = $_GET["id_produto"];

$total_pedido = $quantidade * $preco_venda;

$data_pedido = date('Y/m/d');

//0 = Gerado , 1 = Finalizado , 2 = cancelado;
$status_pedido = 0;


if ( $query = "INSERT INTO tb_pedido
                        (data_pedido, 
                        id_cli, 
                        total_pedido, 
                        status_pedido) 
                        VALUES 
                        (:data_pedido,
                         :id_cli,
                         :total_pedido,
                         :status_pedido)")

                    $stmt = $conn->prepare($query);

                    $stmt->bindValue(":data_pedido","$data_pedido");
                    $stmt->bindValue(":id_cli","$id_cli");
                    $stmt->bindValue(":total_pedido","$total_pedido");
                    $stmt->bindValue(":status_pedido","$status_pedido");

                    $result = $stmt->execute(); 
                 $id_pedido = $conn->lastInsertId();{

if ( $query = "INSERT INTO tb_itens_pedido
                        (status_item,
                        id_produto, 
                        quantidade, 
                        total,
                        id_pedido)
                        VALUES 
                        (:status_item ,
                         :id_produto ,
                         :quantidade ,
                         :total,
                         :id_pedido)")

                    $stmt = $conn->prepare($query);

                    $stmt->bindValue(":status_item","$status_pedido");
                    $stmt->bindValue(":id_produto","$id_produto");
                    $stmt->bindValue(":quantidade","$quantidade");
                    $stmt->bindValue(":total","$total_pedido");
                    $stmt->bindValue(":id_pedido","$id_pedido");


                    $result = $stmt->execute();{
                            header("Location: consulta_de_pedidos.php");
                        }
}

?>