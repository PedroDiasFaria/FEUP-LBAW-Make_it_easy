<?php
	require_once("../config/init.php");
	
	function selectProjectFromId($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM project WHERE id = ?");
		$stmt->execute(array($id));
		$result = $stmt->fetch();
		return $result;
	}
	
	function selectCommentsFromProject($projectid) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM comment INNER JOIN commentproject ON comment.id = commentproject.id INNER JOIN users ON users.id = comment.users WHERE commentproject.project = ?");
		$stmt->execute(array($projectid));
		$result = $stmt->fetchAll();
		return $result;
	}
	
	function selectCommentFeedback($commentid) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM commentfeedback WHERE comment = ?");
		$stmt->execute(array($commentid));
		$result = $stmt->fetchAll();		
		return $result;
	}
	
	function createNewProject($name, $description, $dateDue, $createdBy) {
		global $conn;
		$conn->beginTransaction();
			$stmt = $conn->prepare("INSERT INTO project VALUES (DEFAULT, ?, ?, DEFAULT, ?, null, ?, ?) RETURNING id;");
			$stmt->execute(array($name, $description, $dateDue, $createdBy, 'false'));
			$result = $stmt->fetch();
			
			$stmt = $conn->prepare("INSERT INTO participation VALUES (?,?,?, DEFAULT);");
			$stmt->execute(array($createdBy, $result['id'], 'COORDENADOR'));
		$conn->commit();
		
		return $result;
	}
	
?>
