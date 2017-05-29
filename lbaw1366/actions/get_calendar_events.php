<?php 
	require_once("../database/user.php");
	
	header('Content-type: application/json');

	$id = $_GET["id"];

	$result = get_events($id);

	if($result){
		echo json_encode($result);
	}
	else
		echo json_encode(array("http" => "404 Not Found"));
	
?>