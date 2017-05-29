<?php
	require_once("../config/init.php");
	
	header('Content-type: application/json');

	function registerUser($username, $password, $email, $name, $surname, $birth, $avatar, $gender, $bio, $webpage) {
		global $conn;
		$stmt = $conn->prepare("INSERT INTO users VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, DEFAULT, null, ?, ?, ?, DEFAULT)");
		$result = $stmt->execute(array(strtolower($username), $password, $email, $name, $surname, $birth, $avatar, $gender, $bio, $webpage, 'PORCONFIRMAR', 'ATIVO', 'false'));

		if($result)
			sendEmailConfirmation($username, $email);
		
		return $result;
	}

	function selectUserFromUsername($username) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
		$stmt->execute(array($username));
		$result = $stmt->fetch();
		return $result;
	}
	
	function selectUserFromId($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
		$stmt->execute(array($id));
		$result = $stmt->fetch();
		return $result;
	}
	
	function selectIdFromEmail($email) {
		global $conn;
		$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
		$stmt->execute(array($email));
		$result = $stmt->fetch();
		return $result['id'];
	}
	
	function sendEmailConfirmation($username, $email) {
		global $conn;
		$user = selectUserFromUsername($username);
		$code = crypt($username, 'lbaw1366');
		$stmt = $conn->prepare("INSERT INTO passwordrecovery VALUES(DEFAULT, ?, DEFAULT, ?)");
		$result = $stmt->execute(array($code, $user['id']));

		if($result) {
			$link = "<a href = 'http://gnomo.fe.up.pt/~lbaw1366/final/actions/emailconfirm.php?code=".$code."'>Confirmar email</a>";
			$ToEmail = $email;
			$EmailSubject = 'MIE - Confirmação de e-mail';
			$mailheader = "From: lbaw1366@fe.up.pt\r\n";
			$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$MESSAGE_BODY .= "Bem-vindo ao <i>Make it Easy</i>, <b>".$username."</b>. Por favor clique neste link para confirmar o seu email: ".$link.".<br>Este é um e-mail automático. Por favor não responda."; 
			if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)){};
		}
	}

	function confirmEmail($code) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM passwordrecovery WHERE validationCode = ?");
		$stmt->execute(array($code));
		$result = $stmt->fetch();
		if(count($result['users']) == 1) {
			$stmt = $conn->prepare("UPDATE users SET userType = 'UTILIZADOR' WHERE id = ?");
			$stmt->execute(array($result['users']));
			
			$stmt = $conn->prepare("DELETE FROM passwordrecovery WHERE validationCode = ?");
			$stmt->execute(array($code));
		}
		$user = selectUserFromId($result['users']);
		return $user;
	}
	
	function isLoginCorrect($username, $password) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
		$stmt->execute(array($username, $password));
		$result = $stmt->fetch();

		return $result;
	}

	function count_unread_msg($id){
	
		global $conn;
		$stmt = $conn->prepare("SELECT COUNT(*) FROM message WHERE touser = ? AND readstatus = 'FALSE' AND folder='recebidas';");
		$stmt->execute(array($id));
		$result = $stmt->fetch();

		return $result;
	}
	
	function get_messages_by_id($id){
	
		global $conn;
		//$stmt = $conn->prepare("SELECT t1.*, t2.username FROM message as t1 INNER JOIN users as t2 ON t1.fromuser = t2.id WHERE t1.touser = ? OR t1.fromuser = ? ORDER BY datesent DESC");
		$stmt = $conn->prepare("SELECT t1.*, t2.username AS fromUsername, t3.username AS toUsername FROM message as t1 INNER JOIN users as t2 ON t1.fromuser = t2.id INNER JOIN users as t3 ON t1.touser = t3.id WHERE t1.touser = ? OR t1.fromuser = ? ORDER BY datesent DESC");
		$stmt->execute(array($id, $id));
		return $result = $stmt->fetchAll();
	}

	function deleteMessages($ids){
	
		global $conn;
		$query ="DELETE FROM message WHERE id=";
		$arr_ids = preg_split("/ /", $ids);
		
		for ( $i = 0; $i <= sizeof($arr_ids) - 2 ; $i++) {
			if($i == 0)
				$query .= $arr_ids[$i];
			else
				$query .= ' OR id='.$arr_ids[$i];
		}
		$stmt = $conn->prepare($query);
		
		return $stmt->execute(array());
		
	}

	function change_message_status($id){

		global $conn;
		$stmt = $conn->prepare("UPDATE message SET readstatus = 'TRUE' WHERE id=?");
		$stmt->execute(array($id));
		return $result = $stmt->fetchAll();
	}
	
	function get_usernames(){

		global $conn;
		$stmt = $conn->prepare("SELECT id,username from users");
		$stmt->execute();
		return $result = $stmt->fetchAll();
	}
		
	function send_message($from,$dest, $subj, $msg){
		
		global $conn;
		
		$stmt1 = $conn->prepare("SELECT id from users WHERE username=?");
		$stmt1->execute(array($dest));
		$id_dest = $stmt1->fetch();
		
		if($id_dest){
			$stmt2 = $conn->prepare("INSERT INTO message VALUES (DEFAULT,0,?,?,DEFAULT,'false','recebidas',?,?,'false')");
			return $stmt2->execute(array($subj,$msg, $from, $id_dest["id"]));
		}else
			return false;

	}
	
	function get_projects_by_id($id, $urgent){
	
		global $conn;
		if($urgent == "false")
			$stmt = $conn->prepare("SELECT project.id, project.name, project.datedue,project.datestart, users.username from project inner join users on users.id = project.createdBy left join participation on participation.project = project.id where participation.users = ? AND participation.memberStatus != 'BANIDO' ORDER BY project.datestart DESC");
		else
			$stmt = $conn->prepare("SELECT project.id, project.name, project.datedue,project.datestart from project inner join participation on participation.project = project.id where participation.users = ? AND project.datedue < NOW()+'8 days' AND participation.memberStatus != 'BANIDO' ORDER BY project.datedue DESC");
		
		$stmt->execute(array($id));
		return $result = $stmt->fetchAll();
	}

	function get_recents_projects($id){
	
		global $conn;
		$stmt = $conn->prepare("SELECT project.id, project.name, project.datedue from project inner join participation on participation.project = project.id where participation.users = ? AND participation.memberStatus != 'BANIDO' ORDER BY project.datestart DESC");
			
		$stmt->execute(array($id));
		return $result = $stmt->fetchAll();
	
	}

	function get_recents_tasks($id){
		global $conn;
		$stmt = $conn->prepare("SELECT project.id, project.name, project.datedue from project inner join participation on participation.project = project.id where participation.users = ? AND participation.memberStatus != 'BANIDO' ORDER BY project.datestart DESC");
			
		$stmt->execute(array($id));
		return $result = $stmt->fetchAll();
	
	}

	function get_tasks_by_id($id, $urgent){
		global $conn;
		if($urgent == "false")
			$stmt = $conn->prepare("SELECT task.id, task.name, task.taskPriority, task.taskstatus, task.datedue, task.project from task INNER JOIN participation on participation.project = task.project WHERE participation.users = ? AND participation.memberStatus != 'BANIDO' ORDER BY task.datestart DESC");
		else
			$stmt = $conn->prepare("SELECT task.id, task.name, task.project from task INNER JOIN participation on participation.project = task.project WHERE participation.users = ? AND task.taskPriority ='ALTA' AND task.taskstatus != 'FECHADO' AND participation.memberStatus != 'BANIDO' ORDER BY task.taskPriority DESC");

		$stmt->execute(array($id));
		return $result = $stmt->fetchAll();
	}

	function get_data_to_profile($id){

		global $conn;
		//$stmt1 = $conn->prepare("SELECT users.*, skills from users INNER JOIN userSkills on users.id = ? and users = ?");
		$stmt = $conn->prepare("SELECT users.*, skills.skill FROM users INNER JOIN userskills on users.id = userskills.users INNER JOIN skills on userskills.skills = skills.id WHERE users.id = ?");
		$stmt->execute(array($id));
		$result = $stmt->fetchAll();

		if(!$result) {
			$result = selectUserFromId($id);
		}
		
		return $result;
	}

	function recover_password($email){

		global $conn;
		$new_password = get_random_password(15);
		$hash_pass = hash("sha512",$new_password);

		$stmt1 = $conn->prepare("SELECT username FROM users WHERE email=?");
		$stmt1->execute(array($email));
		$result1 = $stmt1->fetch();

		$stmt = $conn->prepare("UPDATE users SET password=? WHERE email=?");
		$stmt->execute(array($hash_pass, $email));

		if($result1){
			$ToEmail = $email;
			$EmailSubject = 'MIE - Recuperação de password';
			$mailheader = "From: lbaw1366@fe.up.pt\r\n";
			$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$MESSAGE_BODY .= "Olá, ".$result1["username"].".<br>A sua nova password é: ".$new_password."<br>Este é um e-mail automático. Por favor não responda.";
			if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)){};
			return true;
		}else
			return false;

	}

	function get_random_password($len) {

 	  	$word = array_merge(range('a', 'z'), range('A', 'Z'));
   	   	shuffle($word);
   	   	return substr(implode($word), 0, $len);

	}

	function changeUserAvatar($url, $id){

		global $conn;
		$stmt = $conn->prepare("UPDATE users SET avatar = ? where id = ?");
		return $stmt->execute(array($url, $id));
	}

	function update_profile($id,$webpage, $bio){

		global $conn;
		$stmt = $conn->prepare("UPDATE users SET webpage = ?, bio = ? where id = ?");
		$result = $stmt->execute(array($webpage, $bio, $id));

		return $result;
	}

	function get_events($id){

		global $conn;
		$stmt = $conn->prepare("SELECT * FROM events WHERE userid = ?");
		$stmt->execute(array($id));

		return $result = $stmt->fetchAll();

	}

	function set_event($id, $title, $start, $end){

		global $conn;
		$stmt = $conn->prepare("INSERT INTO events VALUES(DEFAULT,?,?,?,?)");
		$result = $stmt->execute(array($start, $end, $title,$id));

		return $result;

	}

	function get_skills(){
 
        global $conn;
        $stmt = $conn->prepare("SELECT * from skills");
        $stmt->execute();
        return $result = $stmt->fetchAll();
	}
	
	function change_password($id, $pass){

		global $conn;
		$stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
		$result = $stmt->execute(array($pass, $id));

		return $result;
	}

?>
