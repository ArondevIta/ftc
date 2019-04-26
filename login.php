<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset= "UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/custom.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body class=" teal darken-1">

<div class="row" style="padding-top: 100px;"></div>
<div class="col"></div>
<div class="container white" style="padding: 25px;">
    <div class="row">
    </div>
    <div class="row">
      <div class="col s4">
      </div>
      <div class="col s4">
        <img class="responsive-img" src="imagens/logo_ftc_idoso.jpg">
      </div>
      <div class="col s4">
      
      </div>
    </div>
    <div class="row">
        <div class="col s2"></div>
        <div class="col s8">
              <form class="col s12" action="userauthenitcation.php" method="POST" style="padding:25px;"> 
                <div class="row">
                    <div class="input-field col s12" required>
                      <input placeholder="Login" id="first_name" name="email" type="text" class="validate" required="">
                    </div>
                    </div>
                    <div class="row">
                    <div class="input-field col s12" required>
                        <input placeholder="Senha" id="password" name="senha" type="password" class="validate" required="">
                    </div>
                    </div>
                    <div class="row"> 
                      <div class="col s4">
                        <a class="modal-trigger" href="#cadastroModal"> Cadastre-se</a>
                      </div>
                      <div class="col s4">  
                      </div>
                      <div class="col ">
                        <button class="waves-effect waves-indigo btn indigo lighten-1" type="submit" name="action">Entrar
                      </button>
                      </div>            
                    </div>
                
              </form>
        </div>
        <div class="col s2"></div>
    </div>
  </div>

<div class="container">

<!-- Modal Trigger -->
 

  <!-- Modal Structure -->
  <div id="cadastroModal" class="modal">
    <div class="modal-content">
      <h5>Formulário de cadastro</h5>
     <form method="post" action="cadastrando.php">
            <div class="row">
            <div class="input-field col s6">
              <input name="nome" placeholder="Nome" id="first_name" type="text" class="validate" required="">
            </div>
            <div class="input-field col s6">
              <input name="matricula" placeholder="Matricula" id="last_name" type="text" class="validate" required="">
            </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                  <input name="telefone" placeholder="Telefone"  type="text" class="validate" required="">
                </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="login" placeholder="Login" id="email_inline" type="text" class="validate" required="">
              </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                  <input name="senha" placeholder="Senha" id="password" type="password" class="validate" required="">
                </div>
                <div class="input-field col s6">
                  <input name="confirmarsenha" placeholder="Confirmar Senha" id="confirm_password" type="password" class="validate" required="">
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
                
            </button>

        </form>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-red btn red lighten-1">Fechar</a>
        </div>
    </div>

  </div>
</div>
<script>
$(document).ready(function(){
    $('.modal').modal();
  })
</script>

</body>
</html>
