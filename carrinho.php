<?php
include_once "conexao.php";
$sql = "SELECT * FROM tb_produto where id =" . $_GET['id'];
$query = "SELECT * FROM `tb_cliente` WHERE 1";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <title>Carrinho</title>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

      <!-- Fave icon -->
      <link href="imgs/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

        <style>
          .card-login {
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;
          }
          .div_form_group {
            border: 1px solid #c1c1c1;
          }
          /* Esconde o input */
          input[type='file'] {
            display: none
          }

          /* Aparência que terá o seletor de arquivo */
          label {
            background-color: #3498db;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            margin: px;
            padding: 6px 20px
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

<!-- Feedback visual, se caso nao for passado nenhum pararemtro nos inputs -->
<?php if (isset($_GET['parametro']) && $_GET['parametro'] == 0) { ?>
  
  <div class="bg-danger pt-2 text-white d-flex justify-content-center">
    <h5> Nenhum parametro passado , tente novamente !!! </h5>
  </div> 

<?php } ?>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Adicionar ao carrinho
            </div>

            <div class="card-body">

            <?php

              //o if pega a variavel $res, e atribui a função mysqli_query, que executa o comando sql, apos isso, defini variaveis e atribui a arrays
              if ($res = mysqli_query($conexao, $sql)) {
                  $id = array();
                  $produto = array();
                  $descricao = array();
                  $preco_custo = array();
                  $preco_venda = array();
                  $i = 0;
                
                  //apos a estapa de cima, criei uma nova variavel $reg que significa registros, usei a função mysqli_fetch_assoc, que faz a conversão de array para strings, e atribui a cada campo do banco 
                  $reg = mysqli_fetch_assoc($res);
                  $produto[$i] = $reg['produto'];
                  $descricao[$i] = $reg['descricao'];
                  $id[$i] = $reg['id'];
                  $preco_custo[$i] = $reg['preco_custo'];
                  $preco_venda[$i] = $reg['preco_venda'];
            ?>
              
            <?php if (empty($_GET == $id[$i])) { ?>

                  <form  action="db_insert_pedido.php?id=<?php echo $id[$i]?>"  method="POST">
                    
                    <input type="hidden" name="id" value="id">
                  
                  <div class="form-group">
                    <input value=" <?php echo $produto[$i]?>" disabled name="produto" type="text" class="form-control" placeholder="Nome do produto">
                  </div>

                  <div class="form-group">
                    <input value="<?php echo $descricao[$i]?>" disabled name="descricao" type="text" class="form-control" placeholder="Descrição do produto">
                  </div>

                  <div class="form-group">
                     <input value="<?php echo $preco_venda[$i]?>" disabled name="preço_venda" type="number" placeholder="Preço de custo" min="0" step="0.01" class="form-control">
                  </div>

                  <div class="form-group">
                     <input name="quantidade" type="number" placeholder="Quantidade" min="0" class="form-control">
                  </div>

                  <select class="form-control">
                  <option selected>Selecionar Cliente</option>
                  <?php
                  if($res = mysqli_query($conexao, $query)) {
                    $nome = array();
                    $i = 0;

                  //apos a estapa de cima, criei uma nova variavel $reg que significa "registros", usei a função mysqli_fetch_assoc, que faz a conversão de array para strings, e atribui a cada campo do banco 
                  while($reg = mysqli_fetch_assoc($res)) {
                    $nome[$i] = $reg['nome'];
                  ?>
                    <option value="<?php echo $nome[$i]?>"><?php echo $nome[$i]?></option>
                    <?php } } ?>
                  </select>
                  <br>
                  <button name="submit" class="btn btn-lg btn-info btn-block" type="submit">Fazer Pedido</button>
                
                  <?php } } ?>
                </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>