<?php
	require_once("../config/init.php");
	
	function selectUsersFromProject($project_id) {
		global $conn;
		$stmt = $conn->prepare("SELECT users FROM participation WHERE project = ? AND memberStatus != 'BANIDO' ORDER BY memberstatus");
		$stmt->execute(array($project_id));
		$result = $stmt->fetchAll();
		return $result;
	}
	
	function checkIfCoordinator($project_id, $user_id) {
		global $conn;
		$stmt = $conn->prepare("SELECT memberStatus FROM participation WHERE project = ? AND users = ?");
		$stmt->execute(array($project_id, $user_id));
		$result = $stmt->fetch();
		
		if($result['memberstatus'] == 'COORDENADOR')
			return 1;
		else {
			if($result['memberstatus'] == 'PARTICIPANTE')
				return 0;
			else
				return 'outsider';
		}
	}

	function delete_user_from_team($projid, $userid) {
		global $conn;
		$stmt = $conn->prepare("UPDATE participation SET memberStatus = 'BANIDO' WHERE (users = ? AND project = ?)");
		$result = $stmt->execute(array($userid, $projid));
		return $result;
	}
	
	function add_element_team($projid, $userid) {
		global $conn;
		$stmt = $conn->prepare("INSERT INTO participation VALUES(?,?,'PARTICIPANTE',DEFAULT)");
		$result = $stmt->execute(array($userid, $projid));
		
		if($result){
			$stmt2 = $conn->prepare("INSERT INTO message VALUES (DEFAULT,0,'Novo projeto','O utilizador ".$_SESSION["s_username"]." adicionou-o a um novo projeto, com o ID ".$projid.". Por favor consulte a sua lista de projetos.',DEFAULT,'false','recebidas',?,?,'false')");
			$stmt2->execute(array($_SESSION["s_id"], $userid));
		}			
		return $result;
	}
?>