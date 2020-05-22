<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ctrl+PEX</title>
    <link rel="icon" href="imagens/logo_icon.png">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> 
    <link rel="stylesheet" href="estilo.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f7f72148df.js" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>

  
  <body>
    <header>
      <!-- Barra de Navegação -->
      <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
        <div class="container">

          <!-- header -->
          <div class="navbar-header">

            <!-- botao toggle -->
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#barra-navegacao">
              <span class="sr-only">alternar navegação</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            <a href="index.php" class="navbar-brand">
              <span class="img-logo">Ctrl+PEX</span>
            </a>

          </div>

          <!-- navbar -->
          <div class="collapse navbar-collapse" id="barra-navegacao">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="">Experimento</a></li>
              <li class="divisor" role="separator"></li>
              <li><a href="login.php">Fazer Login</a></li>
              <li><a href="cadastro.php">Cadastre-se</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
      
      <!-- Carousel -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="banner" style="background-image: url(imagens/imgcapa1.png);"></div>
            <div class="carousel-caption">
                <h2 class="animated bounceInRight" style="animation-delay: 1s">Bem-vindo(a) ao <span>Ctrl+PEX</span></h2>
                <h3 class="animated bounceInLeft" style="animation-delay: 2s">Sistema em Pesquisa e Experimentação</h3>
            </div>
          </div>
          <div class="item">
            <div class="banner" style="background-image: url(imagens/imgcapa1.png);"></div>
            <div class="carousel-caption">
                <h2 class="animated slideInDown" style="animation-delay: 1s">Inicie agora seu <span>Experimento!</span></h2>
                <p class="animated zoomIn" style="animation-delay: 2s"><a href="#">Iniciar</a></p>
            </div>
          </div>
          <div class="item">
            <div class="banner" style="background-image: url(imagens/imgcapa1.png);"></div>
            <div class="carousel-caption">
                <h2 class="animated zoomIn" style="animation-delay: 1s">Compartilhe seus <span>Experimentos ou Ensaios</span></h2>
                  <a class="animated bounceInLeft" style="animation-delay: 2s" href="#">Compartilhar Experimento</a>
                  <a class="animated bounceInRight" style="animation-delay: 3s" href="#">Compartilhar Ensaio</a>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      
      </div>
    </header>


    <!-- Seção Introdução -->
    <main>
        <div id="intro-area">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h3 class="main-title">O que é o Ctrl+PEX?
                  <p>______</p>
                </h3>
              </div>
              <div class="col-md-4 intro-box">
                <i class="fas fa-microscope"></i>
                <h4>Experimentos</h4>
                <p>É um ambiente padronizado de coleta e categorização para os mais diversos experimentos no campo das ciências bológicas.</p>
              </div>
              <div class="col-md-4 intro-box">
                <i class="fas fa-laptop-code"></i>
                <h4>Cadastros</h4>
                <p>O Sistema Web possui uma interface simples e amigável, com possibilidade de cadastramento local de usuários, para compor um banco de dados unificado.</p>
              </div>
              <div class="col-md-4 intro-box">
                <i class="fas fa-search"></i>
                <h4>Pesquisas</h4>
                <p>Seus dados servirão de base para futuros estudos e pesquisas, trabalhando na característica interdisciplinar.</p>
              </div>
            </div>
          </div>
        </div>
    </main>

    
    <!-- Seção Recursos -->
    <div id="recursos-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 apply-box" id="company-img"></div>
          <div class="col-md-6 apply-box" id="pattern-img">
            <h4>Acesse o Ctrl+PEX em qualquer dispositivo
              <h5>________</h5>
            </h4>
            <p>O Sistema possui um layout <b>responsivo</b>, ou seja, ele se encaixa automaticamente na tela de qualquer dispositivo do usuário. Como também, a tecnologia responsiva muda a aparência e disposição do site com base no tamanho da tela em que ele é exibido.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Rodapé
    <footer id="rodape">
      <div class="container">
        <div class="row">
          <p>&copy; Copyright 2020 - Projeto Ctrl+PEX</p></br>
        </div>
      </div>
    </footer>-->

    <!-- Rodapé 
    <div class="footer">  
      <p>&copy; Copyright 2020 - Projeto Ctrl+PEX</p></br>
    </div>

    <div id="interface_rodape">
      <footer id="rodape">
        <p>&copy; Copyright 2019 - Projeto Visão Computacional</br>
      </footer>
    </div>-->

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