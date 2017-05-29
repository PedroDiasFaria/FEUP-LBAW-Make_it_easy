<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	header('Content-type: application/json');

	$id = $_POST["id"];	
	$password = $_POST["pass"];

	$result = change_password($id, hash("sha512",$password));

	if($result) {
		echo json_encode($result);
	}else
		echo json_encode(array("http" => "403 Forbidden"));
	
?>