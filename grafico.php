<?php include('base.html');
	  include('conexao.php');
	  include('menu_professor.php');
 ?>

<?php 
				$sqlGreen = "SELECT COUNT(p_acertos) as p_acertos FROM aluno WHERE p_acertos >=70";
				$consultaGreen = mysqli_query($conexao, $sqlGreen);



			 	while($dadoGreen = mysqli_fetch_array($consultaGreen)){
			 		$green = $dadoGreen['p_acertos']; 

				}

				$sqlYellow = "SELECT COUNT(p_acertos) as p_acertos FROM aluno WHERE p_acertos >=50 and p_acertos <70";
				$consultaYellow = mysqli_query($conexao, $sqlYellow);

				while($dadoYellow = mysqli_fetch_array($consultaYellow)){
			 		$yellow = $dadoYellow['p_acertos']; 

				}

				$sqlRed = "SELECT COUNT(p_acertos) as p_acertos FROM aluno WHERE p_acertos <50 and p_acertos >=0";
				$consultaRed = mysqli_query($conexao, $sqlRed);

				while($dadoRed = mysqli_fetch_array($consultaRed)){
			 		$red = $dadoRed['p_acertos']; 

				}




?>



<div class="row" style="padding: 50px;"></div>


	<div id="piechart"></div>
						    	
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

		<script type="text/javascript">
								// Load google charts
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

								// Draw the chart and set the chart values
			function drawChart() {
				var data = google.visualization.arrayToDataTable([
				['Task', 'note per student'],
				['Acima da media', <?php echo $green;?>],
				['Na media', <?php echo $yellow;?>],
				['Abaixo da media', <?php echo $red;?>],
				]);

								  // Optional; add a title and set the width and height of the chart
				var options = {'title':'Situação dos alunos', 'width':450, 'height':400,
									};

								  // Display the chart inside the <div> element with id="piechart"
				var chart = new google.visualization.PieChart(document.getElementById('piechart'));
					 chart.draw(data, options);
								}
		</script>

<br><br><br><br>

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
            <li><a class="grey-text text-lighten-3" href="#">Aluno</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Cadastrar perguntas</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Visualizar perguntas</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Sobre</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Sair</a></li>
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