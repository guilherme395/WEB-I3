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

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Fave icon -->
        <link href="imgs/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

        <style>

            .div_container {
                padding: 50px; 
                margin-left: 450px;
            }
            .div_marcador {
                border: 1px solid #c1c1c1; 
                border-radius: 20px;
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

<div style="padding-top: 20px;"></div>

<div class="container">
<div class="row">

<?php

//o if pega a variavel $res, e atribui a função mysqli_query, que executa o comando sql, apos isso, defini variaveis e atribui a arrays
if($res = mysqli_query($conexao, $sql,)) {
    $id = array();
    $produto = array();
    $descricao = array();
    $preco_custo = array();
    $preco_venda = array();
    $arquivo = array();
    $i = 0;

//apos a estapa de cima, criei uma nova variavel $reg que significa registros, usei a função mysqli_fetch_assoc, que faz a conversão de array para strings, e atribui a cada campo do banco 
while($reg = mysqli_fetch_assoc($res)) {
    $produto[$i] = $reg['produto'];
    $descricao[$i] = $reg['descricao'];
    $id[$i] = $reg['id'];
    $preco_custo[$i] = $reg['preco_custo'];
    $preco_venda[$i] = $reg['preco_venda'];
    $path_arquivo[$i] = $reg['path_arquivo'];
?>

<div class="col-lg-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h3 class="card-title"><?php echo $produto[$i]?></h3>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-success">
                        <img src="<?php echo $path_arquivo[$i] ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                        <p><?php echo $descricao[$i]?></p>
                    <div class="widget-49-meeting-action">
                    <button class="btn btn-success">SALVA NO CARRINHO </button><button class="btn btn-warning">SAIBA MAIS...</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } } ?>

  </div>
</div>



    </body>
</html>