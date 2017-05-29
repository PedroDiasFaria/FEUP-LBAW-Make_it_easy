<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	header('Content-type: application/json');
	$msg = "";

	$ids = $_POST["ids"];

	// Perguntas à Base de Dados
	$result = deleteMessages($ids);

	if($result) {
		echo json_encode("Apagou");
	}else
		echo json_encode("Não Apagou");
	
?>
