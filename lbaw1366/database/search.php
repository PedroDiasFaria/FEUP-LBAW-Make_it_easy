<?php
	require_once("../config/init.php");
	
	header('Content-type: application/json');

	function searchUsers($query) {
		global $conn;
		//$stmt = $conn->prepare("SELECT username, name, surname FROM users WHERE value @@ to_tsquery(?) ORDER BY username DESC;");
		$stmt = $conn->prepare("SELECT id, username, name, surname FROM users WHERE LOWER(username) LIKE LOWER(?) OR LOWER(name) LIKE LOWER(?) OR LOWER(surname) LIKE LOWER(?) ORDER BY username DESC;");
		$query .= '%';
		$stmt->execute(array($query,$query,$query));
		$result = $stmt->fetchAll();
		
		return $result;
	}

?>
