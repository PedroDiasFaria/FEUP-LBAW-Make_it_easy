<?php

	// Include dos ficheiros de acesso à BD
	require_once("../database/task.php");
	
	$id = $_POST["id"];
	$comp = $_POST["comp"];
	$status = $_POST["status"];
	
	$result = update_task($id, $comp, $status);

	if($result)
		echo json_encode('sucesso');
	else
		echo json_encode('erro');
?>