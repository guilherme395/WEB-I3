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
        <li class="nav-item">
            <a href="consulta_de_pedidos.php" class="nav-link">Pedidos</a>
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
              Cadastrar novo produto
            </div>

            <div class="card-body">
                  <form  action="pega_cadastro.php"  method="POST" enctype="multipart/form-data" autocomplete = "off">
                
                  <div class="form-group">
                    <input name="produto" type="text" class="form-control" placeholder="Nome do produto">
                  </div>

                  <div class="form-group">
                    <input name="descricao" type="text" class="form-control" placeholder="Descrição do produto">
                  </div>

                  <div class="form-group">
                   <input name="preco_custo" type="number" placeholder="Preço de custo" min="0" step="0.01" class="form-control">
                   
                  </div>

                  <div class="form-group">
                  <input name="preco_venda" type="number" placeholder="Preço de venda" min="0" step="0.01" class="form-control">
                  </div>

                  <div >
                    
                    <div class="form-group">

                    <label for='selecao-arquivo'>Selecionar um arquivo &#187;</label>
                    <input name="arquivo" id='selecao-arquivo' type='file'>
              
                    </div>

                  </div>

                  <button name="submit" class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
                </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
