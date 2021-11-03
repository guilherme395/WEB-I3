<?php

include_once "conexao.php";

$sql = "SELECT * FROM tb_produto ORDER BY id DESC";

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

        <style>

            .div_container {
                padding: 50px; 
                margin-left: 450px;
            }
            .div_marcador {
                border: 1px solid #c1c1c1; 
                border-radius: 20px;
            }

        </style>
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
            <a href="produtos.php" class="nav-link">Consulta de produto</a>
        </li>
        <li class="nav-item">
            <a href="index.php" class="nav-link">Sair</a>
        </li>
        </ul>
    </div>
</nav>

<?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>

    <div class="bg-success pt-2 text-white d-flex justify-content-center">
        <h5> Produto cadastrado com sucesso !!! </h5>
    </div> 
    
<?php } ?>

<?php

if($res = mysqli_query($conexao, $sql)) {
    $produto = array();
    $descricao = array();
    $preco_venda = array();
    $i = 0;

    while($reg = mysqli_fetch_assoc($res)) {
        $produto[$i] = $reg['produto'];
        $descricao[$i] = $reg['descricao'];
        $preco_venda[$i] = $reg['preco_venda'];
        ?>

            <div class="container div_container ">

                <div class="marcador col-md-12 col-xl-8 div_marcador ">

                <h2><?php echo $produto[$i]?></h2>
                <img src="imgs/comercio.png">
                <p><?php echo $descricao[$i]?></p>
                <h4>R$ <?php echo $preco_venda[$i]?></h4>

                <br />

                <button class="btn btn-success">SALVA NO CARRINHO </button><button class="btn btn-warning">SAIBA MAIS...</button>

                </div>

            </div>

           

        <?php
    }
}

?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>
</html>