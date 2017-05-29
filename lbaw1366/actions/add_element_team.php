<?php
	
	require_once("../database/participation.php");
	
	header('Content-type: application/json');
	$msg = "";

	$projid = $_POST["projid"];
	$userid = $_POST["userid"];

	$result = add_element_team($projid, $userid);

	if($result) {
		echo json_encode($result);
	}else
		echo json_encode($answer = array("http" => "404 Not Found"));
	
?>