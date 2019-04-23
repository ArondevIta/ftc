<?php
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");//nunca fica em baixo, senão da pra ver o restante do codigo caso não seja a pessoa logada.
		exit;
	}



?>


<?php 
	  include ('menu_professor.php');
	  include('base.html');
 ?>

<br><br><br>
<?php 	echo "<center><h5>Bem vindo professor ".$_SESSION['email']."!</h5></center>";?>

<div class="container-fluid" style="width: 100%; bottom: 0; position: fixed;">
 <footer class=" cyan darken-3">

    <div class="container">
    
    <div class="row">

      <div class="col l6 s12">
         <h5 class="white-text">Ftceiraidade Itabuna-Ba</h5>
         <p class="grey-text text-lighten-4"></p>
      </div>

      <div class="col l4 offset-l2 s12">
        <ul>
            <li><a class="grey-text text-lighten-3" href="painel.php">Inicio</a></li>
            <li><a class="grey-text text-lighten-3" href="professor_aluno.php">Aluno</a></li>
            <li><a class="grey-text text-lighten-3" href="cadastrar_Perguntas.php">Cadastrar perguntas</a></li>
            <li><a class="grey-text text-lighten-3" href="visualizar_perguntas.php">Visualizar perguntas</a></li>
            <li><a class="modal-trigger grey-text text-lighten-3" href="#sobreModal">Sobre</a></li>
            <li><a class="grey-text text-lighten-3" href="logoff.php">Sair</a></li>
        </ul>
      </div>

    </div>

</div>

  <div class="footer-copyright white-text">
            <div class="container">
            © 2019 Todos os direitos reservados
            </div>
  </div>
 
 </footer>
</div>






<div class="container">

<!-- Modal Trigger -->
 

  <!-- Modal Structure -->
  <div id="sobreModal" class="modal">
    <div class="modal-content">
      <h4>Sobre o projeto</h4>
      <p>O Ftceiraidade é um projeto que visa ajudar os idosos a se incluirem na era digital.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn red lighten-1">Fechar</a>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('.modal').modal();
  })
</script>