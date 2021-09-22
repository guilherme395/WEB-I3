<html>
  <head>
    <meta charset="utf-8" />
    <title>Desafio I3</title>

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
    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form  action="login.php"  method="POST" >
                <div class="form-group">
                  <input  name="usuario" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">

                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                <a style="margin-left: 75px;" href="">Cadastrar novo usuario </a>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
