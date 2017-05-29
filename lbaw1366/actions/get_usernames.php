<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	header('Content-type: application/json');
	
	$msg = "";
	
	// Perguntas à Base de Dados
	$result = get_usernames();
	
	if($result) {
		echo json_encode($result);
	}
	else {
		// Colocar erros direitos
		echo json_encode("Erro");
	}
?>
