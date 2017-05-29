<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	
	header('Content-type: application/json');

	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$year = $_POST["year"];
	$month = $_POST["month"];
	$day = $_POST["day"];
	$gender = $_POST["gender"];
	$birth = $year."-".$month."-".$day;
	
	$result = registerUser(strtolower($username), hash("sha512",$password), strtolower($email), $name, $surname, $birth, "images/upload/default_avatar.png", $gender, "Sem informação", "Sem informação");


	if($result)
		echo json_encode(array("http" => "200 OK"));
	else
		echo json_encode(array("http" => "403 Forbidden"));
	
?>
