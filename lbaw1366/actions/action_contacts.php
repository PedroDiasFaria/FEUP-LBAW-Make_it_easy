<?php
	// Include dos ficheiros de acesso à BD
require_once("../database/admin.php");

	//if ($s_username) {header("Location: ."); die;}

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$contents = $_POST["contents"];

	// Perguntas à Base de Dados
$result = sendMessage($name, $email, $subject, $contents);

if($result) {
	echo json_encode('Sucesso');
} else {	
	echo json_encode('not_sucess');
}

?>
