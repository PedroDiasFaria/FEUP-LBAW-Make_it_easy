<?php 
	require_once("../database/user.php");
	
	$code = $_GET["code"];
	
	$user = confirmEmail($code);

	if($user['id'] > 0) {
		header("Location: ../login.php");
		die;
	}
	else {
		//mostrar erro de c�digo inv�lido
		header("Location: ../index.php");
	}
	
?>