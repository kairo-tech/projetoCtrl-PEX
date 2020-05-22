<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Tela de Login</title>
       <link rel="icon" href="imagens/logo_icon.png">

      <!-- Bootstrap -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" /> 
      <link rel="stylesheet" href="estilo-login.css" />

      <!-- Font Awesome -->
      <link href="https://use.fontawesome.com/releases/v5.0.11/css/solid.css" rel="stylesheet">
      <script src="https://use.fontawesome.com/releases/v5.0.11/js/all.js"></script> 
      
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="Stylesheet">

      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       
      <!-- JavaScript -->
      <script src="bootstrap/js/bootstrap.min.js"></script>
   </head>
   
   
   <body>
      <!-- Barra de Navegação -->
      <header>
         <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
            <div class="container">
               <!-- header -->
               <div class="navbar-header">
                  <a href="index.php" class="navbar-brand">
                    <span class="img-logo">Ctrl+PEX</span>
                  </a>
               </div>
            </div>
         </nav>
      </header>

      <!-- Área Login -->
      <div class="login">
         <img src="imagens\user_icon.png" class="usuario" width="100" height="100" alt="">
         <h1>Login</h1>
      
         <form class="col-auto">
            <div class="form-group">
               <p>Usuário</p>
               <label class="sr-only" for="inlineFormInput">Name</label>
               <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Digite seu nome de usuário">
            </div>

            <div class="form-group">
               <p>Senha</p>
               <label class="sr-only" for="inlineFormInput">Password</label>
               <input type="password" class="form-control mb-2" id="inlineFormInput" placeholder="Digite sua senha">
            </div>
         </form>

         <div id="botao">
            <input type="submit" name="botao" value="Fazer Login" class="botaoLogin"><br>
         </div>

         <div class="links">
            <a href="#">Esqueceu sua senha?</a>
            <p>Ainda não possui uma conta? <a href="cadastro.php">Cadastre-se</a></p>
         </div>
      </div>
         
      
      <!-- Rodapé
      <footer id="rodape">  
         <h4>&copy; Copyright 2020 - Projeto Ctrl+PEX</h4></br>
      </footer> -->

      <footer>
      <div id="rodape">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>Projeto Ctrl+PEX - <a href="http://www.ufopa.edu.br/oriximina/" 
                target="_balnk">UFOPA | Campus Oriximiná</a> &copy; 2020</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
   
   </body>
</html>