<?php
include_once "conexao.php";

$sql = $conn->prepare("SELECT * FROM tb_cliente");
$sql->execute();

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

            <?php while ($registros = $sql->fetch(PDO::FETCH_ASSOC)) {?>

            <tbody>

                <tr>
                <th>
                    <?php echo $registros["id_cli"]?>
                </th>

                <td>
                    <?php echo $registros["nome"] ?>
                </td>

                <td>
                    <?php echo $registros["cpf_cnpj"]?>
                </td>

                <th>
                    <?php echo $registros["cidade"]?>
                </th>

                <th>
                    <?php echo $registros["estado"] ?>
                </th>

                <th>
                    <a href="editar_cliente.php?id=<?php echo $registros["id_cli"]?>" class="btn btn-info">Editar</a>
                    <a href="scripts.php?delete_cli=<?php echo $registros["id_cli"]?>" class="btn btn-danger">Excluir</a>
                </th>

                </tr>

            </tbody>
                    
            

            <?php } ?>

        </table>

        <a href="cadastro_cliente.php" class="btn btn-primary">Novo cliente</a>

    </div>

 </div>

</div>

</body>
</html>