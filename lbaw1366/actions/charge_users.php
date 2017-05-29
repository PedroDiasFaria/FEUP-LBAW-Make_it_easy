<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/admin.php");
	
	$msg = "";
	
	$result = search_users($sortedBy);
	$msg = $result;
	
	
	echo json_encode($msg);

?>