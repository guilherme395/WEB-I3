<?php

if (isset($_GET['editado']) && $_GET['editado'] == 001) {

    if ( $query ="UPDATE
                tb_produto 
             SET
                produto = '{$produto}', descricao = '{$descricao}', PRECO_CUSTO = '{$preco_custo}' , PRECO_VENDA = '{$preco_venda}'
             WHERE
                id = " . $_GET['id']){

    header("Location: loja_i3.php?inclusao=2");
    }

}

?>