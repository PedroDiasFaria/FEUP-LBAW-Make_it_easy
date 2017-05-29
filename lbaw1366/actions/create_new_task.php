<?php

	// Include dos ficheiros de acesso à BD
	require_once("../database/task.php");
	
	$id = $_POST["id"];
	$title = $_POST["title"];
	$description = $_POST["description"];
	$priority = $_POST["priority"];
	
	$result = create_new_task($id, $title, $description, $priority);

	if($result)
		echo json_encode('sucesso');
	else
		echo json_encode('erro');
?>