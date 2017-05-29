<?php
	require_once("config/init.php");
	
	$query = $_GET["query"];
	$range = $_GET["range"];
	if($range != 'users') {
		$smarty->display("nopermissions.tpl");
	}
	else {
		$smarty->assign(searchQuery, $query);
		$smarty->assign(searchRange, $range);
		
		$smarty->display("search.tpl");
	}
?>