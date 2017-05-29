<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	header('Content-type: application/json');
	$msg = "";

	$id = $_POST["id"];
	
	// Perguntas à Base de Dados
	$result = change_message_status($id);

	if($result) {
		echo json_encode($result);
	}else
		echo json_encode("Erro");
	
?>
