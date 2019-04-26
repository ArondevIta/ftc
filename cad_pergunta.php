<?php
require("conexao.php");


$pergunta = $_POST['pergunta'];
$opt1 = $_POST['txt_opt1'];
$opt2 = $_POST['txt_opt2'];
$opt3 = $_POST['txt_opt3'];
$opt4 = $_POST['txt_opt4'];
if(empty($pergunta) || empty($opt1) || empty($opt2) || empty($opt3) || empty($opt4)){ //faz a validação se veio pelo post
	
	?>

	<div class="alert alert-danger" style="width: 600px; margin-left: 400px;">
   		 <strong>Erro!</strong> Campo de pergunta ou de respostas vazios!
  	</div>
  	<script type="text/javascript">
  	setTimeout("window.location='cadastrar_Perguntas.php'",2000);
  	</script>
	<?php
}else{
	$pergunta = strip_tags($_POST['pergunta']); //sem caracteres especiais/sem espaçamento/sem tags (serve como uma espécie de validação contra mysql Injection)
	
	$idcategoria	=	$_POST['categoria'];

	

	$comandoInsere	=	"insert into pergunta VALUES ('','$pergunta','$idcategoria')";
	$insereComando	=	mysqli_query($conexao, $comandoInsere);
	if($insereComando){
		
	}else{
		echo "Erro ao cadastrar no banco de dados!";
	}

	$idPergunta	= mysqli_insert_id($conexao);//retorna o ID da pergunta inserida
	
	$situacaoA = 0;
	$situacaoB = 0;
	$situacaoC = 0;
	$situacaoD = 0;

	$escolhaA = 'a';
	$escolhaB = 'b';
	$escolhaC = 'c';
	$escolhaD = 'd';

	$escolha = $_POST["resposta"];
	if ($escolha == 'a') {
		$situacaoA = 1; 
	}if ($escolha == 'b') {
		$situacaoB = 1; 
	}if ($escolha == 'c') {
		$situacaoC = 1; 
	}if($escolha  == 'd'){
		$situacaoD = 1; 
	}

	if($situacaoA==0 && $situacaoB==0 && $situacaoC==0 && $situacaoD==0){
	echo "Você precisa selecinar uma das opcoes";	
	}else{
		
		
		function cad_resposta($resposta,$escolha,$idPergunta,$situacao){
		require("conexao.php");

		$comandoInsert	=	"insert into resposta values('','$resposta','$escolha','$situacao','$idPergunta')";
		$executaInsert	=	mysqli_query($conexao, $comandoInsert);



		}

		if ($escolha == 'a') {
			$situacaoA = 1; 
			if(isset($_POST['txt_opt1'])){
			$resp = $_POST['txt_opt1'];
			cad_resposta($resp,$escolha,$idPergunta,$situacaoA);
			}
		}else{
			if(isset($_POST['txt_opt1'])){
			$resp = $_POST['txt_opt1'];
			cad_resposta($resp,$escolhaA,$idPergunta,$situacaoA);
			}
		}
		
		if ($escolha == 'b') {
			$situacaoB = 1;
			if(isset($_POST['txt_opt2'])){
			$resp = $_POST['txt_opt2'];
			cad_resposta($resp,$escolha,$idPergunta,$situacaoB);
			}
		}else{
			if(isset($_POST['txt_opt2'])){
			$resp = $_POST['txt_opt2'];
			cad_resposta($resp,$escolhaB,$idPergunta,$situacaoB);
			}
		}
		if ($escolha == 'c') {
			$situacaoC = 1; 
			if(isset($_POST['txt_opt3'])){
			$resp = $_POST['txt_opt3'];
			cad_resposta($resp,$escolha,$idPergunta,$situacaoC);
			}
		}else{
			if(isset($_POST['txt_opt3'])){
			$resp = $_POST['txt_opt3'];
			cad_resposta($resp,$escolhaC,$idPergunta,$situacaoC);
			}
		}
		if($escolha  == 'd'){
			$situacaoD = 1; 
			if(isset($_POST['txt_opt4'])){
			$resp = $_POST['txt_opt4'];
			cad_resposta($resp,$escolha,$idPergunta,$situacaoD);
			}
		}else{
			if(isset($_POST['txt_opt4'])){
			$resp = $_POST['txt_opt4'];
			cad_resposta($resp,$escolhaD,$idPergunta,$situacaoD);
			}
		}

	}

	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=cadastrar_Perguntas.php'>
			<script type=\"text/javascript\">
				alert(\"pergunta cadastrada com sucesso \")
			</script>";
		?>

  <?php

}
?>