<?php

include 'conexao.php';

//atribuição de valores no momento que e foi a requisição 
$nome = $_POST['nome'];
$tipo_pessoa = $_POST['tipo_pessoa'];
$fantasia = $_POST['fantasia'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$indereco = $_POST['indereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];


//Se a $_GET estiver vazio, o if faz o insert do cliente, caso contrario, faz um update no mesmo
if (empty($_GET)) {

    if ( $query = "INSERT INTO
                            tb_cliente
                            (nome, 
                            tipo_pessoa, 
                            fantasia, 
                            cpf_cnpj, 
                            indereco, 
                            numero, 
                            bairro, 
                            cidade, 
                            estado)
                    VALUES
                            (:nome,
                             :tipo_pessoa,
                             :fantasia,
                             :cpf_cnpj,
                             :indereco,
                             :numero,
                             :bairro,
                             :cidade,
                             :estado)")
                             
                            $stmt = $conn->prepare($query);

                            $stmt->bindValue(":nome","$nome");
                            $stmt->bindValue(":tipo_pessoa","$tipo_pessoa");
                            $stmt->bindValue(":fantasia","$fantasia");
                            $stmt->bindValue(":cpf_cnpj","$cpf_cnpj");
                            $stmt->bindValue(":indereco","$indereco");
                            $stmt->bindValue(":numero","$numero");
                            $stmt->bindValue(":bairro","$bairro");
                            $stmt->bindValue(":cidade","$cidade");
                            $stmt->bindValue(":estado","$estado");

                            $result = $stmt->execute(); {

                            header("Location: clientes.php?inclusao=1");
}} else {

    $id_update = $_GET['id'];

    if ( $query = "UPDATE
                        tb_cliente 
                   SET
                        nome = :nome , 
                        tipo_pessoa = :tipo_pessoa , 
                        fantasia = :fantasia , 
                        cpf_cnpj = :cpf_cnpj ,
                        indereco = :indereco ,
                        numero = :numero ,
                        bairro = :bairro ,
                        cidade = :cidade ,
                        estado = :estado
                    WHERE
                        id = " . $id_update)
                        
                        $stmt = $conn->prepare($query);

                        $stmt->bindValue(":nome","$nome");
                        $stmt->bindValue(":tipo_pessoa","$tipo_pessoa");
                        $stmt->bindValue(":fantasia","$fantasia");
                        $stmt->bindValue(":cpf_cnpj","$cpf_cnpj");
                        $stmt->bindValue(":indereco","$indereco");
                        $stmt->bindValue(":numero","$numero");
                        $stmt->bindValue(":bairro","$bairro");
                        $stmt->bindValue(":cidade","$cidade");
                        $stmt->bindValue(":estado","$estado");

                        $result = $stmt->execute(); {

header("Location: clientes.php?inclusao=2");
    }
}


?>