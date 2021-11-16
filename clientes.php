<?php

include_once "conexao.php";

$sql = "SELECT * FROM tb_cliente ORDER BY id";


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fave icon -->
    <link href="imgs/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <style>

    .spc_br{
        padding-top: 20px;
    }

    </style>

</head>
<body>
        
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

<!-- Logo -->
<a href="loja_i3.php" class="navbar-brand">Loja Virtual I3</a>

<!-- navegacao -->
<div class="collapse navbar-collapse" id="navegacao">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="loja_i3.php" class="nav-link ">Home</a>
        </li>
        <li class="nav-item lat" >
            <a href="produtos.php" class="nav-link">Produtos</a>
        </li>
        <li class="nav-item">
            <a href="clientes.php" class="nav-link">Clientes</a>
        </li>
        <li class="nav-item">
            <a href="index.php" class="nav-link">Sair</a>
        </li>
        </ul>
    </div>
</nav>

<?php if (isset($_GET['delete']) && $_GET['delete'] == 2) { ?>
  
  <div class="bg-danger pt-2 text-white d-flex justify-content-center">
    <h5> Cliente excluido com succeso !!! </h5>
  </div> 

<?php } ?>

<?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
  
  <div class="bg-success pt-2 text-white d-flex justify-content-center">
    <h5> Cliente cadastrado com succeso !!! </h5>
  </div> 

<?php } ?>

<div class="container spc_br ">

<div class="card">
  <div class="card-header">
   <div class="row"> 
    <h2 class="card-title"> &nbsp Consulta de cliente</h2> 
 </div>    


    <div class="card-body">
    
  
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF OU CNPJ</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>

            <?php

                //o if pega a variavel $res, e atribui a função mysqli_query, que executa o comando sql, apos isso, defini variaveis e atribui a arrays
                if($res = mysqli_query($conexao, $sql)) {
                    $id = array();
                    $nome = array();
                    $cpf_cnpj = array();
                    $cidade = array();
                    $estado = array();
                    $i = 0;

                //apos a estapa de cima, criei uma nova variavel $reg que significa registros, usei a função mysqli_fetch_assoc, que faz a conversão de array para strings, e atribui a cada campo do banco 
                while($reg = mysqli_fetch_assoc($res)) {
                    $id[$i] = $reg['id'];
                    $nome[$i] = $reg['nome'];
                    $cpf_cnpj[$i] = $reg['cpf_cnpj'];
                    $cidade[$i] = $reg['cidade'];
                    $estado[$i] = $reg['estado'];
            ?>

            <tbody>

                <tr>
                <th>
                    <?php echo $id[$i]?>
                </th>

                <td>
                    <?php echo $nome[$i]?>
                </td>

                <td>
                    <?php echo $cpf_cnpj[$i]?>
                </td>

                <th>
                    <?php echo $cidade[$i]?>
                </th>

                <th>
                    <?php echo $estado[$i]?>
                </th>

                <th>
                    <a href="editar_cliente.php?id=<?php echo $id[$i]?>" class="btn btn-info">Editar</a>
                    <a href="scripts.php?delete_cli=<?php echo $id[$i]?>" class="btn btn-danger">Excluir</a>
                </th>

                </tr>

            </tbody>
                    
            

            <?php }
                  } ?>

        </table>

        <a href="cadastro_cliente.php" class="btn btn-primary">Novo cliente</a>

    </div>

 </div>

</div>

</body>
</html>