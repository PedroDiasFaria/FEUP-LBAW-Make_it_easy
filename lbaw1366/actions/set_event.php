<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	header('Content-type: application/json');

	$id = $_POST["id"];
	$title = $_POST["title"];
	$start = $_POST["start"];
	$end = $_POST["end"];
	
	// Perguntas à Base de Dados
	$result = set_event($id, $title, $start, $end);

	if($result) {
		echo json_encode($result);
	}else
		echo json_encode("Erro");
	
?>