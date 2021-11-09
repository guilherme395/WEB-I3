<?php

include_once "conexao.php";

$sql = "SELECT * FROM tb_produto";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loja virtual - I3</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Fave icon -->
        <link href="imgs/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

        <style>
            .div_marcador {
                border: 1px solid #c1c1c1;
            }
            .fnt{
                font-size: 20px;
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

<?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>

    <div class="bg-success pt-2 text-white d-flex justify-content-center">
        <h5> Produto cadastrado com sucesso !!! </h5>
    </div> 
    
<?php } ?>

<?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 2) { ?>

<div class="bg-success pt-2 text-white d-flex justify-content-center">
    <h5> Produto editado com sucesso !!! </h5>
</div> 

<?php } ?>


<?php

                //o if pega a variavel $res, e atribui a função mysqli_query, que executa o comando sql, apos isso, defini variaveis e atribui a arrays
                
                if($res = mysqli_query($conexao, $sql)) {
                    $produto = array();
                    $descricao = array();
                    $preco_venda = array();
                    $i = 0;
                
                //apos a estapa de cima, criei uma nova variavel $reg que significa registros, usei a função mysqli_fetch_assoc, que faz a conversão de array para strings, e atribui a cada campo do banco 

                while($reg = mysqli_fetch_assoc($res)) {
                    $produto[$i] = $reg['produto'];
                    $descricao[$i] = $reg['descricao'];
                    $preco_venda[$i] = $reg['preco_venda'];
                    ?>

                    <div class="card mb-3 container" style="max-width: 600px;"> 

                     
                        <div class="row g-0 div_marcador">
                            <div class="col-md-4">
                            <img src="imgs/comercio.png" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $produto[$i]?></h2>
                                <p class="card-text"><?php echo $descricao[$i]?></p>
                                <h4 class="card-text">R$ <?php echo $preco_venda[$i]?></h4>

                                <button class="btn btn-success">SALVA NO CARRINHO </button><button class="btn btn-warning">SAIBA MAIS...</button>

                            </div>
                            </div>
                        </div>
                    </div>
<!-- 
            <div class="container div_container ">

                <div class="marcador col-md-6 col-xl-6 div_marcador ">

                <h2><?php echo $produto[$i]?></h2>
                <img src="imgs/comercio.png">
                <p class="fnt"><?php echo $descricao[$i]?></p>
                <h4>R$ <?php echo $preco_venda[$i]?></h4>

                <br />

                <button class="btn btn-success">SALVA NO CARRINHO </button><button class="btn btn-warning">SAIBA MAIS...</button>

                </div>

            </div> -->

<?php } } ?>

    </body>
</html>