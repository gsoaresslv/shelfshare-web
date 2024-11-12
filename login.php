<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" async defer></script>
        <script src="js/login.js" async defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="main-login">
            <div class="left-login">
                <img src="img/logo.png" alt="imagembackground" class="imgback">
            </div>
            <div class="right-login">
                <div class="card">
                    <div class="card-head">
                        <div class="card-title">
                            <h1>Login</h1>
                        </div>    
                        <a href="cadastro.html">Cadastre-se!</a>    
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuário</label>
                            <input type="usuario" class="form-control" name="usuario" id="inputUsuario" aria-describedby="emailHelpId" placeholder="Usuário"/>
                            <p id="erroUser"></p>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Senha"/>
                            <p id="erroPassword"></p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label mb-2" for="flexCheckDefault">
                              Lembrar de mim nesse dispositivo
                            </label>
                            <br>
                            <a class="senha-link" href="recuperasenha.html">Esqueci minha senha</a>
                        </div> 
                        <button class="btn btn-primary" onclick="verificaForm()">Fazer Login</button>    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>