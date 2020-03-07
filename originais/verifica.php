<?php
	session_start();
	if(isset($_SESSION["usuario_logado"]) && $_SESSION["usuario_logado"]){
		if(time() - $_SESSION["ultima_acao"] >  600){
			header("Location: logout.php");
		}
	}else{
		header("Location: login.php");
	}
	$_SESSION["ultima_acao"] = time();
?>
