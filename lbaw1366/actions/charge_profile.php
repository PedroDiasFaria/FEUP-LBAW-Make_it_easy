<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	header('Content-type: application/json');
	$msg = "";

	$id = $_GET["id"];
	
	// Perguntas à Base de Dados
	$result = get_data_to_profile($id);

	if($result) {
		echo json_encode($result);
	}else
		echo json_encode($answer = array("http" => "404 Not Found"));
	
?>