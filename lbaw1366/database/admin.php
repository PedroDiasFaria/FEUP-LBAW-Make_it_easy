<?php
	require_once("../config/init.php");

	header('Content-type: application/json');
	
	function search_users(){
		global $conn;
		$stmt = $conn->prepare("SELECT id,username, userStatus FROM users ORDER BY id;");
	
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		return $result;
	}
	
	function changeUserStatus($id, $value){
		
		global $conn;
		if($value == "banir")
			$stmt = $conn->prepare("UPDATE users SET userstatus='BANIDO' WHERE users.id=".$id);
		if($value == "suspender")
			$stmt = $conn->prepare("UPDATE users SET userstatus='SUSPENSO' WHERE users.id=".$id);	
		if($value == "reativar")
			$stmt = $conn->prepare("UPDATE users SET userstatus='ATIVO' WHERE users.id=".$id);
		
		return $stmt->execute();
		
	}

	function suspend_user($id, $date){
		
		global $conn;

		$stmt1 = $conn->prepare("UPDATE users SET lastactivity='".$date."' WHERE id=".$id);
		$stmt1->execute();
		$stmt2 = $conn->prepare("UPDATE users SET userstatus='SUSPENSO' WHERE id=".$id);	
		
		return $stmt2->execute();
		
	}

	function sendMessage($name, $email, $subject, $contents){

	global $conn;
	$stmt = $conn->prepare("INSERT INTO admincontact VALUES (DEFAULT, ?, ?, ?, ?, DEFAULT, 'PENDENTE', NULL)");

	$result = $stmt->execute(array($name, $email, $subject, $contents));

	if($result) {
		$ToEmail = 'lbaw1366@gmail.com';
		$mailheader = "From: " .$email. "\r\n";
		$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		if(mail($ToEmail, $subject, $contents, $mailheader)){};
	}

	return $result;
}
	
?>