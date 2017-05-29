<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	header('Content-type: application/json');

	$id = $_POST["id"];	
	$webpage = $_POST["web"];
	$bio = $_POST["bio"];	

	$result = update_profile($id, $webpage, $bio);

	if($result) {
		echo json_encode($result);
	}else
		echo json_encode(array("http" => "403 Forbidden"));
	
?>