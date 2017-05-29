<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	header('Content-type: application/json');
	
	$from = $_POST["from"];
	$dest = $_POST["dest"];
	$subj = $_POST["subj"];
	$msg = $_POST["msg"];
	
	// Perguntas à Base de Dados
	$result = send_message($from,$dest, $subj, $msg);
	
	if($result) {
		echo json_encode($result);
	}
	else {
		// Colocar erros direitos
		echo json_encode("Erro");
	}
?>
