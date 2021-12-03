<?php

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="../assets/css/styles.css">
         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fave icon -->
        <link href="imgs/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

        <title>Login | Loja Virtual I3</title>
    </head>
    <body>
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="assets/img/img-login.svg" alt="">
                </div>

                <div class="login__forms">
                <form action="login.php" method="post" class="login__registre">
                        <h1 class="login__title">Logar</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input name="usuario" type="text" placeholder="Username" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input name="senha" type="password" placeholder="Password" class="login__input">
                        </div>

                        <button name="submit" id="submit" class="btn btn-lg btn-success" type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>