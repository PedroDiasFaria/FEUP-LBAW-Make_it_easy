<?php
	// Include dos ficheiros de acesso à BD
	require_once("../database/user.php");
	header('Content-type: application/json');
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$answer="";

	// Perguntas à Base de Dados
	$result = isLoginCorrect(strtolower($username), hash("sha512",$password));

	if($result["usertype"] == "PORCONFIRMAR"){
		 $answer = array("answer" => "Confirme a sua conta no e-mail de registo.","http" => "404 Not Found");
		 echo json_encode($answer);
    } else if($result["userstatus"] =="BANIDO"){
    	 $answer = array("answer" => "A sua conta está BANIDA.","http" => "404 Not Found");
		 echo json_encode($answer);
    } else if($result["userstatus"] =="SUSPENSO"){
    	 $date = preg_split("/[\s]+/", $result["lastactivity"]);

    	 $answer = array("answer" => "A sua conta está SUSPENSA até ".$date[0].".","http" => "404 Not Found");
		 echo json_encode($answer);
    } else if($result["userstatus"] == "ATIVO"){
			$_SESSION['s_id'] = $result['id'];
			$_SESSION['s_username'] = $result['username'];
			$_SESSION['s_nome'] = $result['name']." ". $result['surname'];
			$_SESSION['s_type'] = $result['usertype'];
			
			$smarty->assign('s_id', $_SESSION["s_id"]);
			$smarty->assign('s_username', $_SESSION["s_username"]);
			$smarty->assign('s_nome', $_SESSION["s_nome"]);
			$smarty->assign('s_type', $_SESSION["s_type"]);

			$answer = array("http" => "200 OK");
			echo json_encode($answer);
		} else  {
				$answer = array("answer" => "Conjunto utilizador/password errado.");
			 	echo json_encode($answer);
		   	}
?>
