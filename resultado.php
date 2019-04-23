<?php
	include('base.html'); 
	include('conexao.php');
if (isset($_POST["perg1"])) {
	//se todas perguntas forem respondidas ele valida e insere no banco, pega o codigo dos ifs e colar aqui
$contaqtd 	=	0;
$erros		=	0;
$acertos	=	0;
?>
<script>alert('Questionario respondido'); window.location = './painel.php';</script>"
            


	<?php
	if(isset($_POST["perg1"])){
			$opt1 = $_POST["perg1"];
			if(examina($opt1) == 1){
				$acertos +=1;
			}else {
				$erros +=1;
			}
			
			$contaqtd +=1;
	}
	if(isset($_POST["perg2"])){
			$opt2 = $_POST["perg2"];
			if(examina($opt2) == 1){
				$acertos +=1;
			}else {
				$erros +=1;
			}
			$contaqtd +=1;
	}
	if(isset($_POST["perg3"])){
			$opt3 = $_POST["perg3"];
			if(examina($opt3) == 1){
				$acertos +=1;
			}else {
				$erros +=1;
			}
			$contaqtd +=1;
	}
	if(isset($_POST["perg4"])){
			$opt4 = $_POST["perg4"];
			if(examina($opt4) == 1){
				$acertos +=1;
			}else {
				$erros +=1;
			}
			$contaqtd +=1;
	}
	if(isset($_POST["perg5"])){
			$opt5 = $_POST["perg5"];
			if(examina($opt5) == 1){
				$acertos +=1;
			}else {
				$erros +=1;
			}
			$contaqtd +=1;
	}
	if(isset($_POST["perg6"])){
			$opt6 = $_POST["perg6"];
			if(examina($opt6) == 1){
				$acertos +=1;
			}else {
				$erros +=1;
			}
			$contaqtd +=1;
	}

	$emailLogado = $_SESSION['email'];

	$consulta_acertos = "select nota,aula from aluno where nome= '$emailLogado'";
	$executa_aluno = mysqli_query($conexao, $consulta_acertos);
	$dado = mysqli_fetch_assoc($executa_aluno);
	$aulaCursada	= $dado['aula'];


	$acertos = $acertos+$dado['nota'];
	$aulaProx = $aulaCursada+1;
	$comandoNota = "update aluno set nota = '$acertos', aula = '$aulaProx' where nome = '$emailLogado'";
	$executaNota	= mysqli_query($conexao, $comandoNota);







	$consulta_perg = "select count(*) as total from pergunta where id_cat <='$aulaCursada'";
	$executa_consulta = mysqli_query($conexao, $consulta_perg);
	$dado_perg = mysqli_fetch_assoc($executa_consulta);
	
	$p_acertos = ($acertos*100)/$dado_perg['total'];
	$comandoPorcentagem = "update aluno set p_acertos = '$p_acertos' where nome = '$emailLogado'";
	$executaPorcentagem	= mysqli_query($conexao, $comandoPorcentagem);	


	

}else{
	//não faz nada, apenas aparece uma msg pra responder as questões
	?>
	 <div class="alert alert-danger" style="width: 600px; margin-left: 400px;">
   		 <strong>Erro!</strong> Você precisa concluir o Exercicio
  	</div>
	 <?php
}




	

	//echo "qtd de questões = ".$contaqtd.'<hr>';

	function examina($escolha){
		require('conexao.php');

		$comandoResposta	=	"select * from resposta where Id_resposta='$escolha' LIMIT 1";	
		$executacomando		=	mysqli_query($conexao, $comandoResposta);

		$retornaResposta = mysqli_fetch_object($executacomando);
			$situacao	=	$retornaResposta->situacao;

			if($situacao==1){
				return 1;
			}else{
				return 0;
			}


	}


	





 ?>