<?php 
	require_once("config/init.php");
	
	$messageType = $_GET["type"];
	
	if($messageType != "register" && $messageType != "contact")
		$smarty->display("nopermissions.tpl");
	else {
		$smarty->assign("messageType", $messageType);
		$smarty->display("out_message.tpl");
	}
?>