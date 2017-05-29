<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	header('Content-type: application/json');
	$msg = "";

	$id = $_POST["id"];
	
	// Perguntas à Base de Dados
	$result = count_unread_msg($id);

	if($result['count'] >= 0) {
		echo json_encode($result);
	}else
		echo json_encode("Erro");
	
?>
