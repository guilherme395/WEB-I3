<?php
include_once "conexao.php";

$sql_pedidos = $conn->prepare('SELECT pp.*,c.nome,
                                (CASE
                                    WHEN pp.status_pedido = 0 THEN "Gerado"
                                    WHEN pp.status_pedido = 1 THEN "Fechado"
                                    WHEN pp.status_pedido = 2 THEN "Cancelado"
                                    ELSE pp.status_pedido
                                END) as desc_status
                                FROM tb_pedido pp 
                                inner join tb_cliente c on pp.id_cli = c.id_cli');
$sql_pedidos->execute();

$sql_itens_pedido = $conn->prepare("SELECT pd.* , p.produto FROM tb_itens_pedido pd
                       inner join tb_produto p on pd.id_produto = p.id");
$sql_itens_pedido->execute();

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
    <h5> Produto excluido com succeso !!! </h5>
  </div> 

<?php } ?>

<div class="container spc_br ">

<div class="card">
  <div class="card-header">
   <div class="row"> 
    <h2 class="card-title"> &nbsp Consulta de Pedidos</h2> 
 </div>    

    <div class="card-body">

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Produto</th>
                <th scope="col">Cliente</th>
                <th scope="col">Data do pedido</th>
                <th scope="col">Status pedido</th>
                <th scope="col">Total do pedido</th>

                <th scope="col">Ações</th>
                </tr>
            </thead>

            <?php while ($tb_itens_pedido = $sql_itens_pedido->fetch(PDO::FETCH_ASSOC)) { ?><?php while ($tb_pedidos = $sql_pedidos->fetch(PDO::FETCH_ASSOC)) { ?> 


<?php  $timeStampData = strtotime($tb_pedidos["data_pedido"]); 
$data_brasileira = date("d/m/Y" , $timeStampData);?>

            <tbody>

                <tr>
                <th>
                    <?php echo $tb_pedidos["id"] ?>
                </th>

                <td >
                    <?php echo $tb_itens_pedido["produto"] ?>
                </td>

                <td>
                    <?php echo $tb_pedidos["nome"]?>
                </td>

                <th >
                    <?php echo $data_brasileira; ?>
                </th>

                <th>
                    <?php echo $tb_pedidos["desc_status"]; ?>
                </th>

                <th>
                    R$<?php echo number_format($tb_pedidos["total_pedido"],2,",",".");?>
                </th>

                <th>
                    <a href="scripts.php?atualizar_pedido_para_1=<?php echo $tb_pedidos["id"]?>" class="btn btn-success">Fechar</a>
                    <a href="scripts.php?atualizar_pedido=<?php echo $tb_pedidos["id"]?>" class="btn btn-danger">Cancelar </a>
                </th>
                </tr>
            </tbody>
            <?php } } ?>
        </table>
    </div>
 </div>
</div>
</body>
</html>