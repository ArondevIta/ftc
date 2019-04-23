<script type="text/javascript">

		function loginfailed(){
			setTimeout("window.location='login.php'", 2000);
		}
	</script>
<?php
if(!isset($_SESSION)){
		session_start();
	}
session_destroy();
echo "<script>loginfailed()</script>";
?>