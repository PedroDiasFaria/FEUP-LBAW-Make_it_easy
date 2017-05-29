<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/project.php");
	require_once("../database/participation.php");
	require_once("../database/user.php");
	require_once("../database/task.php");
	header('Content-type: application/json');
	
	if(isset($_POST["project"])) {
		$id = $_POST["project"];
		unset($_POST["project"]);
		
		$project = selectProjectFromId($id);
		echo json_encode($project);
	}
	
	if(isset($_POST["users"])) {
		$projectid = $_POST["users"];
		unset($_POST["users"]);
		
		$user_ids = selectUsersFromProject($projectid);
		$size = sizeof($user_ids);
		$users = array();
		for($i = 0; $i < $size; $i++) {
			$users[$i] = selectUserFromId($user_ids[$i]['users']);
		}
		echo json_encode($users);
	}
	
	if(isset($_POST["tasks"])) {
		$projectid = $_POST["tasks"];
		unset($_POST["tasks"]);
		
		$tasks = selectTasksFromProject($projectid);
		echo json_encode($tasks);
	}
	
	if(isset($_POST["taskcomments"])) {
		$taskid = $_POST["taskcomments"];
		unset($_POST["taskcomments"]);
		
		$comments = selectCommentsFromTask($taskid);
		echo json_encode($comments);
	}
	
	if(isset($_POST["projectcomments"])) {
		$projectid = $_POST["projectcomments"];
		unset($_POST["projectcomments"]);
		
		$comments = selectCommentsFromProject($projectid);
		echo json_encode($comments);
	}
	
	if(isset($_POST["commentfeedback"])) {
		$commentid = $_POST["commentfeedback"];
		unset($_POST["commentfeedback"]);
		
		$feedback = selectCommentFeedback($commentid);
		
		$pos = 0;
		$neg = 0;
		foreach ($feedback as $item) {
			foreach ($item as $key => $value) {
				if ($value == 'POS') {
					$pos++;
				}
				else if ($value == 'NEG') {
					$neg++;
				}
			}
		}
		$feedback = array('pos' => $pos, 'neg' => $neg);
		echo json_encode($feedback);
	}

?>