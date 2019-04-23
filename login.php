<?php
	
	include('base.html');


?>
<div class="container">
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
		<form class="col s12" action="userauthenitcation.php" method="POST"> 
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
        		<div class="col s6">	
        		</div>
        		<div class="col ">
        			<button class="waves-effect waves-indigo btn indigo lighten-1" type="submit" name="action">Entrar
  					</button>
        		</div>        		
        	</div>
      
		</form>
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