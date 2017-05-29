<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/admin.php");
	
	header('Content-type: application/json');
	$msg = "";

	$id = $_POST["id"];
	$date = $_POST["date"];
	
	// Perguntas à Base de Dados
	$result = suspend_user($id, $date);

	if($result) {
		echo json_encode($result);
	}else
		echo json_encode("Erro");
	
?>