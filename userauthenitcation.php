
<?php 
	$host  = "localhost";
	$user  = "root";
	$pass  = "";
	$banco = "ftc";

	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());

	if(!isset($_SESSION)){
		session_start();
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>autenticando usuario</title>
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='painel.php'",2000);
		}

		function loginfailed(){
			setTimeout("window.location='login.php'", 2000);
		}
	</script>
</head>
<body>


<?php
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$sql  = mysqli_query($conexao, "SELECT * FROM usuario WHERE login='$email' AND senha='$senha'") or die(mysqli_error());
	while($retorna = mysqli_fetch_object($sql)){

		$_SESSION['nivel'] = $retorna->nivel;
	}	
$row  = mysqli_num_rows($sql);

	if($row>0){
		//session_start();
		$_SESSION['email']=$_POST['email'];
		$_SESSION['senha']=$_POST['senha'];
		echo "<center>Você foi autenticado com sucesso</center>";
		echo "<script> loginsuccessfully()</script>";
	}else{
		echo "<center> dados invalidos, aguarde um momento </center>";
		echo "<script>loginfailed()</script>";
	}
?>

</body>
</html>