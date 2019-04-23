
<?php 
	
	$host  = "localhost";
	$user  = "root";
	$pass  = "";
	$banco = "ftc";

	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysql_error());

	include('base.html');	

	if(!isset($_SESSION)){
		session_start();
	}


	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}else{
		
		if($_SESSION['nivel'] == 0){


			include_once('aluno.php');

			?>


			<?php
			/********************************************************************/
		}elseif($_SESSION['nivel'] == 1){
			
			
			include_once('professor.php');

			/********************************************************************/
		}
	}
?>