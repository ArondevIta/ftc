<?php
	include("conexao.php");
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");//nunca fica em baixo, senão da pra ver o restante do codigo caso não seja a pessoa logada.
		exit;
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script><style type="text/css"></style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    
<script type="text/javascript">//<![CDATA[
window.onload=function(){
$(document).ready(function() {
    $('select').material_select();
});
}//]]> 

</script>

<?php include('menu_professor.php'); ?>

<div class="container" style="padding: 25px;">
<h5 >Digite sua pergunta</h5>

<form name="cad_pergunta" method="post" action="cad_pergunta.php">


<div class="row"></div>
 
    <textarea id="textarea1"  placeholder="Digite aqui sua pergunta" name="pergunta" class="materialize-textarea" required></textarea>
    <label for="textarea1"></label>

     <br>



	<select name="categoria">
	Categoria<br>
	<?php
	require('conexao.php');

	$chamaCategoria	=	mysqli_query($conexao,"select * from categoria");

	while ($retornaCategoria = mysqli_fetch_array($chamaCategoria)) {
	?>

	   
	    <option value="<?php echo $retornaCategoria['Id'];?>"><?php echo $retornaCategoria['cat'];?></option>
	  
		<?php
		
	}
		?>
	</select>
<br>
<br>


<div class="col s3">
   <input name="resposta" type="radio" id="test1" value="a" required />
    <label for="test1">a)
	    
	</label><input class="col s8" placeholder="Digite aqui sua primeira opção" id="first_name" name="txt_opt1" type="text" class="validate" required>
</div>

<div class="col s3">
   <input name="resposta" type="radio" id="test2" value="b" required />
    <label for="test2">b)
	    
	</label><input class="col s8" placeholder="Digite aqui sua segunda opção" id="first_name" name="txt_opt2" type="text" class="validate" required>
</div>
<div class="col s3">
   <input name="resposta" type="radio" id="test3" value="c" required />
    <label for="test3">c)
	    
	</label><input class="col s8" placeholder="Digite aqui sua terceira opção" id="first_name" name="txt_opt3" type="text" class="validate" required>
</div>
<div class="col s3">
   <input name="resposta" type="radio" id="test4" value="d" required />
    <label for="test4">d)
	    
	</label><input class="col s8" placeholder="Digite aqui sua quarta opção" id="first_name" name="txt_opt4" type="text" class="validate" required>
</div>


    


<!-- <div class="row">
    <div class="input-field col s12">
    <input placeholder="Digite aqui sua primeira opção" id="first_name" name="txt_opt1" type="text" class="validate">
</div>

<div class="row">
    <div class="input-field col s12">
    <input placeholder="Digite aqui sua primeira opção" id="first_name" name="txt_opt1" type="text" class="validate">
</div>


<div class="row">
    <div class="input-field col s12">
    <input placeholder="Digite aqui sua primeira opção" id="first_name" name="txt_opt1" type="text" class="validate">
</div>
!-->
<button class="waves-effect waves-light btn">cadastrar</button>

</form>
</div>
<br><br>

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
            <li><a class="grey-text text-lighten-3" href="professor_aluno.php">Aluno</a></li>
            <li><a class="grey-text text-lighten-3" href="cadastrar_Perguntas.php">Cadastrar perguntas</a></li>
            <li><a class="grey-text text-lighten-3" href="visualizar_perguntas.php">Visualizar perguntas</a></li>
            <li><a class="modal-trigger grey-text text-lighten-3" href="#sobreModal">Sobre</a></li>
            <li><a class="grey-text text-lighten-3" href="logoff.php">Sair</a></li>
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

<div class="container">

<!-- Modal Trigger -->
 

  <!-- Modal Structure -->
  <div id="sobreModal" class="modal">
    <div class="modal-content">
      <h4>Sobre o projeto</h4>
      <p>O Ftceiraidade é um projeto que visa ajudar os idosos a se incluirem na era digital.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn red lighten-1">Fechar</a>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('.modal').modal();
  })
</script>
