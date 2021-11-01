<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>

    .table-bg{
        padding-top: 500px;
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

<div class="card">
  <div class="card-header">
   <div class="row"> 
    <h2 class="card-title">Consulta de produto</h2>
    <input class="btn btn-primary" type="button" value="Novo Produto" style=" position: absolute;  right: 0;">
   </div>    
    

  <div class="card-body">
    
  
            <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Produto</th>
            <th scope="col">Descrição</th>
            </tr>
        </thead>

        <tbody>

            <tr>
            <th scope="row">1</th>
            <td>ICOMERCIO</td>
            <td>Solução completa para a gestão do seu negócio! Mais controle interno, gestão financeira e organização contábil em um só sistema!</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            </tr>


        </tbody>




    </table>

  

  </div>
</div>

</div>



</body>
</html>