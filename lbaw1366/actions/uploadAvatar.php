<?php 

require_once("../database/user.php");
header('Content-type: application/json');

function outputJSON($msg, $status = 'error'){
	header('Content-Type: application/json');
	die(json_encode(array(
	    'data' => $msg,
	    'status' => $status
	)));
}

if($_FILES['SelectedFile']['error'] > 0){
    outputJSON('Houve um erro ao tentar efetuar o upload.');
}

if(!getimagesize($_FILES['SelectedFile']['tmp_name'])){
    outputJSON('Por favor, confirme que está a fazer upload de uma imagem.');
}

if($_FILES['SelectedFile']['type'] != 'image/png' && $_FILES['SelectedFile']['type'] != 'image/jpg' && $_FILES['SelectedFile']['type'] != 'image/jpeg' && $_FILES['SelectedFile']['type'] != 'image/gif'){
    outputJSON('Tipo de ficheiro inválido. São aceites *.png, *.jpg ou *.gif.');
}


if($_FILES['SelectedFile']['size'] > 1048576){
    outputJSON('O tamanho máximo do ficheiro é 1MB.');
}

if(isset($_SESSION["s_id"])){
	$type = explode("/", $_FILES['SelectedFile']['type']);
	$url = '../images/upload/avatar/' . $_SESSION["s_id"] . '.' . $type[1];
	$avatar = 'images/upload/avatar/' . $_SESSION["s_id"] . '.' . $type[1];
	if(!move_uploaded_file($_FILES['SelectedFile']['tmp_name'], $url)){
	      outputJSON('Erro ao fazer upload do ficheiro.');
	}else{
		chmod($url, 0755);
		$result = changeUserAvatar($avatar,  $_SESSION["s_id"]);
		outputJSON($avatar, 'success');
	}
}

?>