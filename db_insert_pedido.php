<?php

include 'conexao.php';

echo "<pre>";
var_dump($_GET);
echo "</pre>";

if (empty($_GET)) {

    if ( $query = mysqli_query($conexao , "INSERT INTO
                                                `tb_pedido`(`data_pedido`, `id_cli`, `total_custo`, `total_pedido`, `status_pedido`, `observacao`)
                                            VALUES
                                                ()")){

                                            header("Location: clientes.php?inclusao=1");
    }

} else {
    echo "ola ";     
}

?>