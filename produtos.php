<?php

include_once "conexao.php";

$sql = "SELECT * FROM tb_produto ORDER BY id";


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
            <a href="produtos.php" class="nav-link">Consulta de produto</a>
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
    <h2 class="card-title"> &nbsp Consulta de produto</h2> 
 </div>    


    <div class="card-body">
    
  
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Produto</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço de Custo</th>
                <th scope="col">Preço de Venda</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>

            <?php

                //o if pega a variavel $res, e atribui a função mysqli_query, que executa o comando sql, apos isso, defini variaveis e atribui a arrays
                if($res = mysqli_query($conexao, $sql)) {
                    $id = array();
                    $produto = array();
                    $descricao = array();
                    $preco_custo = array();
                    $preco_venda = array();
                    $i = 0;

                //apos a estapa de cima, criei uma nova variavel $reg que significa registros, usei a função mysqli_fetch_assoc, que faz a conversão de array para strings, e atribui a cada campo do banco 
                while($reg = mysqli_fetch_assoc($res)) {
                    $produto[$i] = $reg['produto'];
                    $descricao[$i] = $reg['descricao'];
                    $id[$i] = $reg['id'];
                    $preco_custo[$i] = $reg['preco_custo'];
                    $preco_venda[$i] = $reg['preco_venda'];
            ?>

            <tbody>

                <tr>
                <th>
                    <?php echo $id[$i]?>
                </th>

                <td id="id_<?php echo $id[$i]?>">
                    <?php echo $produto[$i]?>
                </td>

                <td id="id_<?php echo $id[$i]?>">
                    <?php echo $descricao[$i]?>
                </td>

                <th id="id_<?php echo $id[$i]?>">
                    R$<?php echo $preco_custo[$i]?>
                </th>

                <th id="id_<?php echo $id[$i]?>">
                    R$<?php echo $preco_venda[$i]?>
                </th>

                <th>
                    <a href="editar_produto.php?id=<?php echo $id[$i]?>" class="btn btn-info">Editar</a>
                </th>

                <th>
                    <a href="scripts.php?delete=<?php echo $id[$i]?>" class="btn btn-danger">Excluir</a>
                </th>

                <th>

                </th>
                </tr>
                

            </tbody>
                    
            

            <?php }
                  } ?>

        </table>

        <a href="cadastro_produto.php" class="btn btn-primary">Novo Produto</a>

    </div>

 </div>

</div>

</body>
</html>