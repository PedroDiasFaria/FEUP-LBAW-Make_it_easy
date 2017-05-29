<?php 
	require_once("../config/init.php");
	if(!$_SESSION["s_id"]) {
		$smarty->display("nopermissions.tpl");
	}
	else
		$smarty->display("project/newtask.tpl");
?>