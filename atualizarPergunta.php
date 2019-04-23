<?php

if(!isset($_SESSION)){
		session_start();
	}
include("conexao.php");


if(isset($_POST['updatePergunta'])){

	$idPergunta	=	(int)$_POST['id'];
	$pergunta 	=	$_POST['pergunta'];

	$comando	=	"UPDATE pergunta SET perg='$pergunta' WHERE Id_pergunta='$idPergunta'";
	$executa	=	mysqli_query($conexao, $comando);

	$situacaoA = 0;
	$situacaoB = 0;
	$situacaoC = 0;
	$situacaoD = 0;

	$escolhaA  = 'a';
	$escolhaB  = 'b';
	$escolhaC  = 'c';
	$escolhaD  = 'd';


	$escolha = $_POST['resp'];
	if ($escolha == 'a') {
		$situacaoA = 1; 
		if(isset($_POST['txt_opt1'])){
			$resp = $_POST['txt_opt1'];
			$comandoInsert	=	"UPDATE resposta 
							 SET alternativa='$resp', situacao='$situacaoA'
						     WHERE id_pergunta='$idPergunta' AND opcao='$escolha'";
			$executaInsert	=	mysqli_query($conexao, $comandoInsert);
		}
	}else{
			$resp = $_POST['txt_opt1'];
			$comandoInsert	=	"UPDATE resposta 
							 SET alternativa='$resp', situacao='$situacaoA'
						     WHERE id_pergunta='$idPergunta' AND opcao='$escolhaA'";
			$executaInsert	=	mysqli_query($conexao, $comandoInsert);
		}


	if ($escolha == 'b') {
		$situacaoB = 1; 
		if(isset($_POST['txt_opt2'])){
			$resp = $_POST['txt_opt2'];
			$comandoInsert	=	"UPDATE resposta 
							 SET alternativa='$resp', situacao='$situacaoB'
						     WHERE id_pergunta='$idPergunta' AND opcao='$escolha'";
			$executaInsert	=	mysqli_query($conexao, $comandoInsert);
		}

	}else{	
			$resp = $_POST['txt_opt2'];
			$comandoInsert	=	"UPDATE resposta 
							 SET alternativa='$resp', situacao='$situacaoB'
						     WHERE id_pergunta='$idPergunta' AND opcao='$escolhaB'";
			$executaInsert	=	mysqli_query($conexao, $comandoInsert);
		}
	if ($escolha == 'c') {
		$situacaoC = 1; 
		if(isset($_POST['txt_opt3'])){
			$resp = $_POST['txt_opt3'];
			$comandoInsert	=	"UPDATE resposta 
							 SET alternativa='$resp', situacao='$situacaoC'
						     WHERE id_pergunta='$idPergunta' AND opcao='$escolha'";
			$executaInsert	=	mysqli_query($conexao, $comandoInsert);
		}
	}else{
			$resp = $_POST['txt_opt3'];
			$comandoInsert	=	"UPDATE resposta 
							 SET alternativa='$resp', situacao='$situacaoC'
						     WHERE id_pergunta='$idPergunta' AND opcao='$escolhaC'";
			$executaInsert	=	mysqli_query($conexao, $comandoInsert);
		}
	if($escolha  == 'd'){
		$situacaoD = 1;
		if(isset($_POST['txt_opt4'])){
			$resp = $_POST['txt_opt4'];
			$comandoInsert	=	"UPDATE resposta 
							 SET alternativa='$resp', situacao='$situacaoD'
						     WHERE id_pergunta='$idPergunta' AND opcao='$escolha'";
			$executaInsert	=	mysqli_query($conexao, $comandoInsert);
		} 
	}else{
			$resp = $_POST['txt_opt4'];
			$comandoInsert	=	"UPDATE resposta 
							 SET alternativa='$resp', situacao='$situacaoD'
						     WHERE id_pergunta='$idPergunta' AND opcao='$escolhaD'";
			$executaInsert	=	mysqli_query($conexao, $comandoInsert);
		}

	if($situacaoA==0 && $situacaoB==0 && $situacaoC==0 && $situacaoD==0){
	echo "Você precisa selecinar uma das opcoes";	
	}else{
		
		
		/*function cad_resposta($resposta,$idPergunta,$situacao){
		require("conexao.php");

		$comandoInsert	=	"UPDATE resposta 
							 SET alternativa='$resposta', situacao='$situacao'
						     WHERE id_pergunta='$idPergunta'";
		$executaInsert	=	mysqli_query($conexao, $comandoInsert);



		}*/


		if(isset($_POST['txt_opt2'])){
			$resp = $_POST['txt_opt2'];
			
		}
		if(isset($_POST['txt_opt3'])){
			$resp = $_POST['txt_opt3'];
			
		}
		if(isset($_POST['txt_opt4'])){
			$resp = $_POST['txt_opt4'];
			
		}
	}

	if($executa){
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=visualizar_perguntas.php'>
			<script type=\"text/javascript\">
				alert(\"pergunta alterada com sucesso \")
			</script>";
	}else{
		echo "Erro ao atualizar no banco de dados!";
	}

}



?>