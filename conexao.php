<?php

	$host  = "localhost";
	$user  = "root";
	$pass  = "";
	$banco = "ftc";

	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysql_error());
	
	if(!isset($_SESSION)){
		session_start();
	}

?>