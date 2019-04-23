<?php include('base.html') ?>

<!--
<div class="container-fluid" style="width: 100%; bottom: 0; position: fixed;">
  <footer class="page-footer cyan darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Ftceiraidade Itabuna-Ba</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
           
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Inicio</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Começar Teste</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Sobre</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Sair</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Todos os direitos reservados
            </div>
          </div>
  </footer>
</div>
-->


<?php 
      $emailLogado = $_SESSION["email"];
      $aula = mysqli_query($conexao,"select aula FROM aluno WHERE nome='$emailLogado' ");
      while($retornaAula  = mysqli_fetch_array($aula)){
        $auxAula = $retornaAula['aula'];
      }
?>


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
            <li><a class="grey-text text-lighten-3" href=<?php echo "perguntas.php?aula=".$auxAula ?>>Começar Teste</a></li>
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