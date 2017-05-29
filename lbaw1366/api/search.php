<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/search.php");
	header('Content-type: application/json');
	
	if(isset($_POST["query"]) && isset($_POST["range"])) {
		$query = $_POST["query"];
		unset($_POST["query"]);
		$range = $_POST["range"];
		unset($_POST["range"]);
		
		switch ($range) {
			case 'users':
				$result = searchUsers($query);
				break;
			case 'projects':
				$result = searchProjects($query);
				break;
			case 'all':
				$result = searchAll($query);
				break;
		}
		
		echo json_encode($result);
	}
	
?>