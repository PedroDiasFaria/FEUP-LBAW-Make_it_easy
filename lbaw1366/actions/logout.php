<?php
	// Include dos ficheiros de acesso à BD
	header('Content-type: application/json');
	
	session_start();
	session_destroy();
	
	//echo json_encode("sucess");
	// Redirect
	header("Location: ../.");
?>
