<?php

	$host  = "localhost";
	$user  = "root";
	$pass  = "";
	$banco = "ftc";

	mysqli_connect($host, $user, $pass, $banco);

	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());


?>


	<?php
		session_start();
		$aula = 1;
		$nome=$_POST['nome'];
		$telefone=$_POST['telefone'];
		$login=$_POST['login'];
		$senha=$_POST['senha'];
		$confirmarsenha=$_POST['confirmarsenha'];
		$matricula=$_POST['matricula']; 
		$nivel = 0;
		$auxLogin = "";
		$consulta_aluno = "SELECT login  FROM usuario";
		$executa_consulta = mysqli_query($conexao, $consulta_aluno);
		while ($dado = mysqli_fetch_array($executa_consulta)) {
			if($_POST["login"] == $dado["login"]){
				$auxLogin = $dado["login"];
			}
		}
		if($_POST["login"] == $auxLogin){
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=login.php'>
			<script type=\"text/javascript\">
				alert(\"ERRO!, Login já existe \")
			</script>";
			
		}else{
			if ($senha == $confirmarsenha) {
			$sql1 = "INSERT INTO aluno( matricula, nome, telefone, aula ) VALUES('$matricula', '$nome', '$telefone', $aula)";
			$sql2 = "INSERT INTO usuario( login, senha, nivel) VALUES('$login', '$senha', $nivel)";	

			mysqli_query($conexao, $sql1);
			mysqli_query($conexao, $sql2);
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=login.php'>
			<script type=\"text/javascript\">
				alert(\"Cadastro efetuado com sucesso \")
			</script>";
			}else{
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=login.php'>
			<script type=\"text/javascript\">
				alert(\"Senhas divergentes \")
			</script>";
			}
		}
		
		



		
		
	 ?>
	


