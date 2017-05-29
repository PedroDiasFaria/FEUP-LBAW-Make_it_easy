<?php

	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	header('Content-type: application/json');
	
	$email = $_POST["email"];
	$answer="";
	$result = recover_password($email);

	if($result == true){
		 $answer = array("answer" => "Foi enviada uma nova password.", "http" => "200 OK");
		 echo json_encode($answer);
	}else{
		 $answer = array("answer" => "O e-mail não existe na base de dados.", "http" => "404 Not Found");
		 echo json_encode($answer);
	}
?>