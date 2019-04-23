<?php
	include("menu_professor.php");
	include("base.html");
	include("conexao.php");
	if(!isset($_SESSION["email"])){
		header("Location: login.php");//nunca fica em baixo, senão da pra ver o restante do codigo caso não seja a pessoa logada.
	exit;

	}

	$consulta_aluno = "SELECT Id_aluno, matricula, nome, telefone, nota, p_acertos, aula FROM aluno ORDER BY p_acertos desc";
	$executa_consulta = mysqli_query($conexao, $consulta_aluno);


	$contGreen 	= 0;
	$contRed   	= 0;
	$contYellow = 0;
  ?>
<div class="row" style="padding: 25px;"></div>
<div class="container">
   <table class="responsive-table striped centered">
        <thead>
          <tr>
             <th>Matricula</th>
	        <th>Nome</th>
	        <th>Telefone</th>
	        <th>Acertos</th>
	        <th>Aulas</th>
	        <th>P_acertos</th>
	        <th>Ação</th>
          </tr>
        </thead>

        <span>Abaixo a tabela de alunos cadastrados</span>
        <tbody>
	    <?php while($dado = mysqli_fetch_array($executa_consulta)){?>
		


			<tr>
				<td ><?php echo $dado['matricula']; ?></td>
				<td ><?php echo $dado['nome']; ?></td>
				<td ><?php echo $dado['telefone']; ?></td>
				<td ><?php echo $dado['nota']; ?></td>
				<td ><?php echo $dado['aula']; ?></td>
				<?php if($dado['p_acertos']>=70){
							echo "<td class='green darken-2' style='color: white;'>".$dado['p_acertos']."%</td>" ;

						}elseif ($dado['p_acertos']<70 && $dado['p_acertos']>=50) {
							echo "<td class='deep-orange darken-1' style='color: white'>".$dado['p_acertos']."%</td>" ;
							
						}elseif ($dado['p_acertos']<50 && $dado['p_acertos']>=0) {
							echo "<td class='red darken-4' style='color: white'>".$dado['p_acertos']."%</td>" ;
							
						}
				?>
				
				<td> 
						<a href="edita_aluno.php?Id_aluno=<?php echo($dado['Id_aluno'])?>" class="btn-floating yellow accent-4"><i class="material-icons  ">edit</i></a>
						<a href="exclui_aluno.php?matricula=<?php echo($dado['matricula'])?>" class="btn-floating  red darken-4"> <i class="material-icons">remove</i></a>
					
				</td>

			</tr>


		<?php }?>
        </tbody>
  </table>

  <center style="padding: 20px;">
  	<a href="grafico.php" class="waves-effect waves-light  light-green darken-4 btn">Ver gráfico</a>
  </center>
</div>

<br><br><br><br>

<div class="container-fluid" style="width: 100%; bottom: 0; position: relative;">
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


