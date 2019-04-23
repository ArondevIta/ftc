<?php 
	include("conexao.php");
	$matricula = $_GET['matricula']; 

	$consulta_aluno = "select * from aluno where matricula='$matricula'";
	$executa_consulta=mysqli_query($conexao, $consulta_aluno);

	while ($dado = mysqli_fetch_array($executa_consulta)) {
		$deleta_aluno = "delete from aluno where matricula = $matricula";
		$executa_exclusao = mysqli_query($conexao, $deleta_aluno);
		echo "Aluno excluido com sucesso";
		header("Location: professor_aluno.php");
	}

 ?>