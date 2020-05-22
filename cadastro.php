<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	
 	<title>Tela de Cadastro</title>
     <link rel="icon" href="imagens/logo_icon.png">
    
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo-cadastro.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    <!-- Datepicker -->
    <link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script src="js/bootstrap-datepicker.min.js"></script> 
    <script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>

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

    
    <!-- Área de Cadastro -->
    <form nome="usuario" method= "post" action="cadastrando.php">

        <div class="container">
            <div class="page-header">
                <h2>CADASTRO</h2>
            </div>

            <div class="row">
                <div class="col-6 col-md-6">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite seu CPF">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail">  
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6 col-md-5">
                    <div class="form-group">
                        <label>Gênero</label>
                            <div class="form-control">
                              <label class="radio-inline">
                                <input type="radio" name="sexo" value="masculino" [(ngModel)]="sexo">
                                Masculino
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="sexo" value="feminino" [(ngModel)]="sexo">
                                Feminino
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="sexo" value="nao_informar" [(ngModel)]="sexo">
                                Não Informar
                              </label>
                            </div>
                    </div>
                </div>

                 <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label class="control-label">Data de Nascimento</label>
                            <div class="input-group date">
                                <input type="text" name="data-nasc" class="form-control" id="exemplo" placeholder="dd/mm/aaaa">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                    </div>
                </div>
                
                <div class="col-6 col-md-4">
                    <div class="form-group">
                        <label for="inst">Instituição de Ensino</label>
                        <input type="text" name="inst-ens" class="form-control" id="inst" placeholder="Informe sua instituição de ensino">
                    </div>
                </div>
            </div>

            
            <div class="row">   
                <div class="col-6 col-md-4">
                    <div class="form-group">
                        <label for="mat">Matrícula / SIAPE</label>
                        <input type="mat" name="mat" class="form-control" id="mat" placeholder="Informe o número da matrícula ou SIAPE">
                    </div>
                </div>
                
                <div class="col-6 col-md-2">
                    <div class="form-group">
                        <label for="vinc">Tipo de Vínculo</label>
                        <select id="vinc" name="vinc" class="form-control">
                            <option selected>Escolher...</option>
                            <option value="1">Docente</option>
                            <option value="2">Técnico</option>
                            <option value="3">Discente</option>
                            <option value="4">Outros</option>
                        </select>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label for="senha">Confirmar Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Confirme sua senha">
                    </div>
                </div>
            </div>
           
            <div class="page-header"></div>

            <div class="cadastro">
                <div id="botao">
                    <p><a href="#" class="btn-cad">Cadastre-se</a></p>
                    <h5>Já possui uma conta? <a href="login.php"><b>Fazer Login</b></a></h5>
                </div>
            </div>
        </div>
    </form>

    
    <!-- Rodapé 
    <footer id="rodape">  
        <h4>&copy; Copyright 2020 - Projeto Ctrl+PEX</h4></br>
    </footer>-->

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

    
    <!-- JavaScript -->
    <script type="text/javascript">
        $('#exemplo').datepicker({  
            format: "dd/mm/yyyy",   
            language: "pt-BR",
        });
    </script>
  </body>
</html>