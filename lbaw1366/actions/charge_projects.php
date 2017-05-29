<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	header('Content-type: application/json');

	$id = $_POST["id"];
	$bool = $_POST["bool"];
	
	$result = get_projects_by_id($id,$bool);

	if($result) {
		echo json_encode($result);
	}else
		echo json_encode(array("http" => "404 Not Found"));
	
?>