<?php

//VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;

//USUARIOS DO SISTEMA
$usuarios_app = array(
    array('email' => 'guilhermell@live.com', 'senha' => '123456'),
);

foreach($usuarios_app as $user){

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

    if($usuario_autenticado){
        header('Location: index2.php');
    }else{
        header('Location: index.php?login=erro');
    }

?>