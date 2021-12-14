<?php

$dsn = 'mysql:host=localhost;dbname=db_loja_virtual_i3';
$usuario = 'root';
$senha = 'root';

try{

  $conn = new PDO($dsn, $usuario , $senha);

} catch(PDOException $e) {
  echo 'Erro: '. $e->getCode(). ' Mensagem: '. $e->getMessage();
}