<?php

	require_once("../database/task.php");
	
	$id = $_POST["id"];
	$description = $_POST["description"];
	$priority = $_POST["priority"];
	
	$result = edit_task($id, $description, $priority);

	if($result)
		echo json_encode('sucesso');
	else
		echo json_encode('erro');
?>