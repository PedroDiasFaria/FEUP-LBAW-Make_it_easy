<?php

	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	$username = $_POST["username"];
	$msg = "";
	
	if(isset($username))
		$result = selectUserFromUsername(strtolower($username));

	if($result)
		$msg = "Esse nome de utilizador já existe na nossa base de dados.";

	echo json_encode($msg);
?>