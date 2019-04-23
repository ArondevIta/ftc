<?php
	require_once('conexao.php');
	
	if(!isset($_SESSION)){

		session_start();
	}


	if(!isset($_SESSION["email"])){
		header("Location: login.php");
		exit;
	}

  ?>

<?php 
	include('menu_aluno.php');
	include('base.html');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
</head>
<body>

		
	<div class="container">
				<form method="POST" action="resultado.php">		
			<br>
			<h5>perguntas</h5>
			<p>
				<?php
				if(isset($_GET['aula'])){

					$idCategoria	=	$_GET['aula'];


				$emailLogado = $_SESSION["email"];
					$chamadadosusuario	=	mysqli_query($conexao,"select aula FROM aluno WHERE nome='$emailLogado' ");
					while($retornaUserLogAula	=	mysqli_fetch_array($chamadadosusuario)){

						$contaAula = $retornaUserLogAula['aula'];

						
							$pergunta 	= "select * from pergunta where id_cat='$idCategoria'"; //comando para pegar as perguntas
					$retornapergunta	=	mysqli_query($conexao, $pergunta); //executa o comando acima
					$contaPergunta	=	1; // faz a contagem

					while($retornaP = mysqli_fetch_array($retornapergunta)){ //loop para pegar os dados das perguntas
						$idPergunta	=	$retornaP['Id_pergunta'];// add na variavel o id q vem do banco (pergunta)
						$Questao	=	$retornaP['perg']; // add questão  q vem do banco (pergunta)
						echo "<span>".$contaPergunta."- ".$Questao."</span> <br>"; //imprime na tela a questão

						//a partir daqui retorna as resposta
						$resposta	=	"select * from resposta WHERE Id_pergunta ='$idPergunta'"; //comando para pegar resposta de acordo com a pergunta
						$retornResposta		=	mysqli_query($conexao, $resposta); //executa o comando acima
						$cont = 1;
						while ($retornaR = mysqli_fetch_array($retornResposta) ) { //Loop que retorna os dados do banco
							# code...
							
							$idResposta	=	$retornaR['Id_resposta']; //add na variavel o id  q vem do banco (resposta)
							$alternativa	=	$retornaR['alternativa']; // add na variavel a alternativa q vem do banco (resposta)
							$situacaoResposta	=	$retornaR['situacao']; // add na varial a situação q vem do banco (resposta)

							?>

		     				 <input name=<?php echo "perg$contaPergunta"; ?> required type="radio" value=<?php echo "$idResposta"; ?> id=<?php echo "$idResposta"; ?> />
		     				 <label for=<?php echo "$idResposta"; ?>><?php echo "$alternativa" ?></label><br>
				<?php
							//echo "<div class=''><input type='radio' id='teste1' required='required' name='perg".$contaPergunta."' value=".$idResposta." /> ".$alternativa."</div><br>";
							 // imprime o radio button
							$cont++;


						}
						$cont = 1;
						$contaPergunta++; //incrementa a contagem
						echo "<br>";
					}
				
					echo "<input type='submit' class='waves-effect waves-light red accent-2 btn' name='enviar' value='Responder'   >";

						
				}
					

				}else{
					//echo "Escolha uma aula no menu!";
				}
				
				?>

			</p>

		</form>
	</div>

 <br><br><br>
<div style="clear: both;"></div>

<div class="container-fluid" style="width: 100%; bottom: 0; position: relative;">
 <footer class=" cyan darken-3">

    <div class="container">
    
    <div class="row">

      <div class="col l6 s12">
         <h5 class="white-text">Ftceiraidade Itabuna-Ba</h5>
         <p class="grey-text text-lighten-4"></p>
      </div>

      <div class="col l4 offset-l2 s12">
        <ul>
            <li><a class="grey-text text-lighten-3" href="painel.php">Inicio</a></li>
            <li><a class="grey-text text-lighten-3" href="#">Começar Teste</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Sobre</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Sair</a></li>
        </ul>
      </div>

    </div>

</div>

  <div class="footer-copyright white-text">
            <div class="container">
            © 2019 Todos os direitos reservados
            </div>
  </div>
 
 </footer>
</div>


</body>
</html>
	
	






	

