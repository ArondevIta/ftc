<?php 
	
	include("conexao.php");
	echo $_POST['Id_aluno'];
	$Id_aluno = $_POST['Id_aluno'];
	$matricula_aluno  = $_POST['matricula'];
	$nome_aluno = $_POST['nome'];
	$telefone_aluno = $_POST['telefone'];

	$consulta = "select Id_aluno, matricula, nome, telefone from aluno where Id_aluno='$Id_aluno'";
	$executa_consulta = mysqli_query($conexao, $consulta);

	while ($retorna_aluno = mysqli_fetch_array($executa_consulta)) {
		$update_aluno = "update aluno set nome='$nome_aluno', matricula='$matricula_aluno', telefone='$telefone_aluno' where Id_aluno= '$Id_aluno'";
		$executa_update = mysqli_query($conexao, $update_aluno);

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=professor_aluno.php'>
			<script type=\"text/javascript\">
				alert(\"Aluno atualizado com sucesso \")
			</script>
		";
		
	}
	

	

 ?>