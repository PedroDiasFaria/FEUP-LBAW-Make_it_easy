<?php 
	require_once("config/init.php");
	
	$userType = $_SESSION["s_type"];
	
	switch ($userType) {
	case "UTILIZADOR":
		$smarty->display("logado.tpl");
		break;
	case "ADMIN":
		header('Location: admin/admin.php');
		//$smarty->display("admin/admin.tpl");
		break;
	default:
		$smarty->display("index.tpl");
		break;
	}
?>