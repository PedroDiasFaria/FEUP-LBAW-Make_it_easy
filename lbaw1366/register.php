<?php 
	require_once("config/init.php");
	if($_SESSION["s_id"]) {
		$smarty->display("nopermissions.tpl");
	}
	else {
		$smarty->assign("name", $_SESSION["_values"]['name']);
		$smarty->display("register.tpl");
	}
?>