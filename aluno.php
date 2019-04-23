<?php
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}



?>
<?php
	require_once('conexao.php'); 	
	include('base.html');
	include('menu_aluno.php');
	
?>
<br>
<div class="row"></div>
<div class="row">
	<?php echo "<h4 id='bv'>Bem vindo ".$_SESSION['email']."!</h4>";?>
</div>
<div class="row">

  <center>
  	<?php 
  		$emailLogado = $_SESSION["email"];
  		$aula = mysqli_query($conexao,"select aula FROM aluno WHERE nome='$emailLogado' ");
  		while($retornaAula	=	mysqli_fetch_array($aula)){
  			$auxAula = $retornaAula['aula'];
  		}
  	 ?>
    <a href=<?php echo "perguntas.php?aula=".$auxAula ?> class="waves-effect waves-light btn">Exercício</a>
  </center>
    
</div>


<?php include('footer.php') ?>