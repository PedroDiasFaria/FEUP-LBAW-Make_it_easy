<?php

	// Include dos ficheiros de acesso à BD
	require_once("../database/admin.php");
	
	$id = $_POST["id"];
	$status = $_POST["status"];
	
	if(isset($id) && isset($status))
		$result = changeUserStatus($id, $status);

	echo json_encode($result);
	
?>