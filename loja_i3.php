<?php
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loja virtual - I3</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body class="Container">
        
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


<div class="container" style="padding-top: 40px;">
      
      <div class="row">
        
        <div class="marcador col-md-6 col-xl-4" style="border: 1px solid #c1c1c1; border-radius: 20px;" >

        <h2></h2>
        <img src="">
        <p> </p>

        <button class="btn btn-success">SALVA NO CARRINHO </button>  <button class="btn btn-warning">SAIBA MAIS...</button>

        </div>

        <div class="marcador col-md-6 col-xl-4 " style="border: 1px solid #c1c1c1; border-radius: 20px;">

        <h2></h2>
        <img src="">
        <p></p>
        <button class="btn btn-success">SALVA NO CARRINHO </button>  <button class="btn btn-warning">SAIBA MAIS...</button>

        </div>

        <div class="marcador col-md-6 col-xl-4" style="border: 1px solid #c1c1c1; border-radius: 20px; padding-bottom: 10px;">

        <h2></h2>
        <img src="">
        <p></p>
        <button class="btn btn-success">SALVA NO CARRINHO </button>  <button class="btn btn-warning">SAIBA MAIS...</button>
          
        </div>

      </div>

    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>
</html>
