<?php	
	if(!isset($_SESSION)){
		session_start();
	}

	if(isset($_SESSION["email"])){
		echo '<a href="painel.php">Painel</a> - <a href="logoff.php">Sair[x]</a>';
		
	}else{
		header("Location: login.php");
	}

  ?>