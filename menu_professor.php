<?php 
	include('base.html');

 ?>


 <nav>
    <div class="nav-wrapper  cyan darken-3">
      <a href="#" class="brand-logo"><i class="material-icons ">face</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="painel.php">Inicio</a></li>
        <li><a href="professor_aluno.php">Aluno</a></li>
        <li><a href="cadastrar_Perguntas.php">Cadastrar Perguntas</a></li>
        <li><a href="visualizar_perguntas.php">Visualizar Perguntas</a></li>
        <li><a class="modal-trigger" href="#demo-modal">Sobre</a></li>
        <li><a href="logoff.php">Sair</a></li>
      </ul>
    </div>
  </nav>


<div class="container">

<!-- Modal Trigger -->
 

  <!-- Modal Structure -->
  <div id="demo-modal" class="modal">
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