<?php 
	require_once("../config/init.php");
	require_once("../database/participation.php");
	
	if(!$_SESSION["s_id"] || !$_GET["id"]) {
		$smarty->display("nopermissions.tpl");
	}
	else {
		$proj_id = $_GET["id"];
		
		$coordinator = checkIfCoordinator($proj_id, $_SESSION["s_id"]);
		
		if($coordinator === 1) {
			$smarty->assign("coordinator", 1);
			$smarty->assign("projectid", $proj_id);
			$smarty->display("project/simpleproject.tpl");
		}
		else {
			if($coordinator === 0) {
				$smarty->assign("coordinator", 0);
				$smarty->assign("projectid", $proj_id);
				$smarty->display("project/simpleproject.tpl");
			}
			else if($coordinator == 'outsider') {
				$smarty->display("nopermissions.tpl");
			}
		}
	}
?>