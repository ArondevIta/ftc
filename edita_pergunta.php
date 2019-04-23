<?php
	
if(!isset($_SESSION)){
		session_start();
	}
include("conexao.php");
include("base.html");
include("menu_professor.php");

if(isset($_GET['id']) && ($_GET['id']<>"" || $_GET['id']<>null)){ //se existir o parâmetro que vem pela URL como ID passa
	//echo "passa, tem ID";
	//pergar a pergunta q veio do banco de dados
	$idPerg 	=	(int)$_GET['id'];
	$comando	=	"select * FROM pergunta WHERE Id_pergunta='$idPerg'";
	$executa	=	mysqli_query($conexao, $comando);

	$retorna	=	mysqli_fetch_object($executa);
	$perguntaIDBanco	=	$retorna->Id_pergunta;
	$perguntaBanco	=	$retorna->perg;

	$comandoResp = "select * from resposta where Id_pergunta='$idPerg' ";
	$executaResp = mysqli_query($conexao, $comandoResp);

	$cont = 0;
	$aux1 = "";
	$aux2 = "";
	$aux3 = "";
	$aux4 = "";
	while ($dado = mysqli_fetch_array($executaResp)) {
				
				if($cont ==0){
					$aux = $dado['alternativa'];
					$aux1 = $aux;
				}
				if($cont == 1){
					$aux = $dado['alternativa'];
					$aux2 = $aux;
				}
				if($cont == 2){
					$aux = $dado['alternativa'];
					$aux3 = $aux;
				}
				if($cont == 3){
					$aux = $dado['alternativa'];
					$aux4 = $aux;
				}
				$cont+=1;
			}
?>
<div class="container" style="padding:50px;">
<!--	<section id="sessao">
	<form name="updatePergunta" method="post" action="atualizarPergunta.php">
		<input type="hidden" name="id" value="<?php echo $perguntaIDBanco;?>">
		<h5>Pergunta:</h5>
		<textarea id="txtarea" name="pergunta" class="form-control" required="required"><?php echo $perguntaBanco;?></textarea><br>
		A)<input type="radio" name="resp" value="a" required>
		<textarea id="txtresp" name="txt_opt1" class="form-control" required="required"><?php echo $aux1;?> </textarea><br>
		B)<input type="radio" name="resp" value="b" required>
		<textarea id="txtresp" name="txt_opt2" class="form-control" required="required"><?php echo $aux2;?> </textarea><br>
		C)<input type="radio" name="resp" value="c" required>
		<textarea id="txtresp" name="txt_opt3" class="form-control" required="required"><?php echo $aux3;?> </textarea><br>
		D)<input type="radio" name="resp" value="d" required>
		<textarea id="txtresp" name="txt_opt4" class="form-control" required="required"><?php echo $aux4;?> </textarea><br>
		<input id="botao" type="submit" class="btn btn-success" value="Atualizar" name="updatePergunta">
	</form>
	</section>
	!-->
<form name="updatePergunta" method="post" action="atualizarPergunta.php">
<h5>pergunta</h5>	
<input type="hidden" name="id" value="<?php echo $perguntaIDBanco;?>">
<textarea id="textarea1" name="pergunta" class="materialize-textarea" required><?php echo $perguntaBanco;?></textarea>
<label for="textarea1"></label>
<div class="col s3">
   <input name="resp" type="radio" id="test1" value="a" required />
    <label for="test1">a)
	    
	</label><input class="col s8" id="first_name" name="txt_opt1" value="<?php echo $aux1;?>" type="text" class="validate" required>
</div>

<div class="col s3">
   <input name="resp" type="radio" id="test2" value="b" required />
    <label for="test2">b)
	    
	</label><input class="col s8" id="first_name" name="txt_opt2" value="<?php echo $aux2;?>" type="text" class="validate" required>
</div>
<div class="col s3">
   <input name="resp" type="radio" id="test3" value="c" required />
    <label for="test3">c)
	    
	</label><input class="col s8" id="first_name" name="txt_opt3" value="<?php echo $aux3;?>" type="text" class="validate" required>
</div>
<div class="col s3">
   <input name="resp" type="radio" id="test4" value="d" required />
    <label for="test4">d)
	    
	</label><input class="col s8" id="first_name" name="txt_opt4" value="<?php echo $aux4;?>" type="text" class="validate" required>
</div>
<button class="waves-effect waves-light btn" name="updatePergunta">Atualizar</button>
</form>
</div>
<?php
}else{
	echo "comando inválido";
}


?>