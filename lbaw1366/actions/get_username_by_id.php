<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	$msg = "";
	
	$id = $_POST["id"];
	$result = get_user_by_id($id);
	
	$msg = $result;
	
	
	echo json_encode($msg);

?>