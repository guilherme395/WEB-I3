<?php
include "conexao.php";
$sql = "SELECT * FROM tb_produto where id = " . $_GET['id'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro de produto</title>

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

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Editar produto
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
                  $id[$i] = $reg['id'];
                  $produto[$i] = $reg['produto'];
                  $descricao[$i] = $reg['descricao'];
                  $preco_custo[$i] = $reg['preco_custo'];
                  $preco_venda[$i] = $reg['preco_venda'];
            ?>
              
            <?php if (empty($_GET == $id[$i])) { ?>

                  <form  action="pega_cadastro.php?id=<?php echo $id[$i]?>"  method="POST">
                    
                    <input type="hidden" name="id" value="id">
                  
                  <div class="form-group">
                    <input value=" <?php echo $produto[$i]?>"  name="produto" type="text" class="form-control" placeholder="Nome do produto">
                  </div>

                  <div class="form-group">
                    <input value="<?php echo $descricao[$i]?>" name="descricao" type="text" class="form-control" placeholder="Descrição do produto">
                  </div>

                  <div class="form-group">
                   <input value="<?php echo $preco_custo[$i]?>" name="preco_custo" type="number" placeholder="Preço de custo" min="0" class="form-control">
                  </div>

                  <div class="form-group">
                     <input value="<?php echo $preco_venda[$i]?>" name="preco_venda" type="number" placeholder="Preço de custo" min="0" class="form-control">
                  </div>

                  <button name="submit" class="btn btn-lg btn-info btn-block" type="submit">Salvar</button>
                </form>

                <?php } } ?>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>