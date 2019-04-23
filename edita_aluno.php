<?php
	
	include("conexao.php");

	$Id_aluno = $_GET['Id_aluno'];
	$retorna_aluno = "select Id_aluno, matricula, nome, telefone from aluno where Id_aluno= '$Id_aluno' ";
	$executa_aluno = mysqli_query($conexao, $retorna_aluno);
	$dado = mysqli_fetch_assoc($executa_aluno);



  ?>
<?php include('base.html');
	  include ('menu_professor.php');
?>

<div class="container">
<h3>Edição de aluno</h3>
	<form method="post" action="editando_aluno.php" >
		<br>
		<label >Matricula:</label>
		<input id="txt" type="text"  autofocus="autofocus" name="matricula" value="<?php echo($dado['matricula']) ?>"><br><br>
		<label >Nome:</label>
		<input id="txtNome" type="text"  autofocus="autofocus" name="nome" value="<?php echo($dado['nome']) ?>"><br><br>
		<label >Telefone:</label>
		<input id="txt" type="text"  autofocus="autofocus" name="telefone" value="<?php echo($dado['telefone']) ?>"><br><br>
		<label >ID:</label>
		<input id="txtID" type="text"  autofocus="autofocus" name="Id_aluno" value="<?php echo($dado['Id_aluno']) ?>" readonly="readonly"><br><br>
		<button id="botao" type="submit" name="editar" class="btn btn-primary">Atualizar</button>
		
			         
	</form>
</div>
<br>