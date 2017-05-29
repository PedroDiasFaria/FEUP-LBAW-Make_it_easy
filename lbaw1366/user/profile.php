<?php 
	require_once("../config/init.php");

	$id = $_GET["id"];
	if($id == $_SESSION["s_id"])
		$smarty->assign('is_mypro', true);
	else
		$smarty->assign('is_mypro', false);

	$smarty->display("user/profile.tpl");
?>