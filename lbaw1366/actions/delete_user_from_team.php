<?php 
	require_once("../database/participation.php");
	
	header('Content-type: application/json');

	$projid = $_POST["projid"];
	$userid = $_POST["userid"];

	$result = delete_user_from_team($projid, $userid);

	if($result){
		echo json_encode($result);
	}
	else
		echo json_encode(array("http" => "404 Not Found"));
	
?>