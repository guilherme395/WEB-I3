<html>
  <head>
    <meta charset="utf-8" />
    <title>Cadastro de produto</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
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
            <a href="cadastro_produto.php" class="nav-link">Cadastrar novo produto</a>
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
              Cadastrar novo produto
            </div>
            <div class="card-body">
              <form  action=""  method="POST" >

                <div class="form-group">
                  <input  name="descricao" type="text" class="form-control" placeholder="Nome do produto">
                </div>

                <div class="form-group">
                  <input  name="descricao" type="text" class="form-control" placeholder="Descrição do produto">
                </div>

                <div class="form-group">
                  <input name="quantidade" type="text" class="form-control" placeholder="quantidade">
                </div>

                <div class="form-group">
                  <input name="preco" type="text" class="form-control" placeholder="preço">
                </div>

                <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>

              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>