<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	header('Content-type: application/json');
	$msg = "";

	$id = $_POST["id"];
	
	// Perguntas à Base de Dados
	$result = get_messages_by_id($id);

	if($result) {
		echo json_encode($result);
	}else
		echo json_encode("Erro");
	
?>