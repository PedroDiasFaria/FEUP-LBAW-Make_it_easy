<?php
	require_once("../config/init.php");
	
	function selectTasksFromProject($project_id) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM task WHERE project = ? ORDER BY dateStart");
		$stmt->execute(array($project_id));
		$result = $stmt->fetchAll();
		return $result;
	}
	
	function selectCommentsFromTask($task_id) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM comment INNER JOIN commenttask ON comment.id = commenttask.id INNER JOIN users on comment.users = users.id WHERE commenttask.task = ?");
		$stmt->execute(array($task_id));
		$result = $stmt->fetchAll();
		return $result;
	}
	
	function update_task($task_id, $completion, $status) {
		global $conn;
		$stmt = $conn->prepare("UPDATE task SET progress = ?, taskStatus = ? WHERE id = ?");
		$result = $stmt->execute(array($completion, $status, $task_id));
	
		return $result;
	}
	
	function edit_task($task_id, $description, $priority) {
		global $conn;
		$stmt = $conn->prepare("UPDATE task SET taskPriority = ?, description = ? WHERE id = ?");
		$result = $stmt->execute(array($priority, $description, $task_id));
	
		return $result;
	}
	
	function create_new_task($proj_id, $title, $description, $priority) {
		global $conn;
		$stmt = $conn->prepare("INSERT INTO task VALUES(DEFAULT, ?, ?, DEFAULT, now()+'8 days', null, '0', ?, 'ABERTO', ?)");
		$result = $stmt->execute(array($title, $description, $priority, $proj_id));
	
		return $result;
	}
?>