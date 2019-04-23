	<?php 
	    include("base.html");
	    include("menu_professor.php") 
	?>

		<div class="row">
		</div>
		<div class="container">
			<span>Perguntas cadastradas</span>		
		</div>
		<?php

			if(!isset($_SESSION)){
					session_start();
				}
			#esqueci, ta faltando algo ali não lembro

			require_once('conexao.php');


			$comando	=	"select * from pergunta";
			$execComando	=	mysqli_query($conexao,$comando);

			if($execComando){
				while($retornaDados	=	mysqli_fetch_array($execComando)){
					$idPerguntaBanco	=	$retornaDados['Id_pergunta'];// pra referenciar que vem do banco para eu não me atrapalhar
					$idCat = $retornaDados['id_cat'];
					$perguntaBanco	=	$retornaDados['perg'];
			?>
			<div class="container">
   
	  		<table class="bordered highlight responsive">

		      <tr>
		        <td><a class="teal-text" href="edita_pergunta.php?id=<?php echo $idPerguntaBanco;?>"><?php echo $idCat. "º  ". $perguntaBanco;?></a></td>
		      </tr>
	    
	  		</table>
			</div>

			<?php
				}

			}else{
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=painel.php'>
			<script type=\"text/javascript\">
				alert(\"Cadastro efetuado com sucesso \")
			</script>";
			}

		?>