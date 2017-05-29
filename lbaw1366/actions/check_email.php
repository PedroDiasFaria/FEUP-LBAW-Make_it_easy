<?php

	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	header('Content-type: application/json');
	
	$email = $_POST["email"];
	$msg = "";
	
	$result = selectIdFromEmail($email);

	if($result)
		$msg = "Esse e-mail já existe na nossa base de dados.";

	echo json_encode($msg);
?>