<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/project.php");

		//if ($s_username) {header("Location: ."); die;}

	$name = $_POST["name"];
	$description = $_POST["description"];
	$dateDue = $_POST["dateDue"];
	$createdBy = $_SESSION["s_id"];
	
		// Perguntas à Base de Dados
	$result = createNewProject($name, $description, $dateDue, $createdBy);

	if($result) {
		if(is_numeric($result['id']))
			echo json_encode($result['id']);
		else
			echo json_encode(array("http" => "Database Error"));
	}
	else
		echo json_encode(array("http" => "403 Forbidden"));

?>