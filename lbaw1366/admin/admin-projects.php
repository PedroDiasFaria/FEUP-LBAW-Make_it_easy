<?php 
	require_once("../config/init.php");
	
	if($_SESSION["s_type"] != 'ADMIN' ) {
		$smarty->display("nopermissions.tpl");
	}
	else
		$smarty->display("admin/admin-projects.tpl");
?>