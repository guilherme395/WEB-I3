<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio I3</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  </head>
  <body>

        <div class="container">

            <form action="valida_login.php"  method="POST" > 

                <div class="form-group">
                    <div class="   col-md-6">
                        <label >e-mail</label>
                        <input name="email" type="text" name="login" class="form-control " placeholder=" Digite seu e-mail" required="" >    
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label> Senha </label>  
                        <input name="senha" type="password" name="rg" class="form-control" placeholder="Digite sua senha " required="" >
                    </div>
                </div>     

                <input type="submit" value="Login" class="btn" name="">

            </form> 
        </div>
  </body>
</html>