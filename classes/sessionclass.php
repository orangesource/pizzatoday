<?php
class sessionClass extends database{
	//CUS = Create Unique Session
	
	public $session_code;
	protected $userid, $time;
	
	public function __construct($db)
	{
		$this->database = $db;
	}
	
	public function createCUS()
	{
		//Maak de sessie code zet de lengte
		$length = 40;
		$ValChars = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ123456789";
		$valNumb = strlen($ValChars);
		$session_code = "";
	 	
		for ($i = 0; $i < $length; $i++) {
			$code = mt_rand(0, $valNumb - 1);
			$session_code .= $ValChars[$code];
		}
		
	 	//code
		
		//Stop de huidige tijd in een variable en tel daar een kwartier bij op
		$thetime = time() + 900;
			
		$query = "SELECT * FROM `store_sessions` WHERE `session_code`='".$session_code."'";
		$data = $this->database->query($query);
		
		if($data != ""){
			for ($i = 0; $i < $length; $i++) {
				$code = mt_rand(0, $valNumb - 1);
				$session_code .= $ValChars[$code];
			}
			
			$insert = "INSERT INTO `store_sessions`(`user_id`, `session_start`, `session_end`, `session_code`, `user_ip`)VALUES('1', '".time()."', '".$thetime."', '".$session_code."', '".$_SERVER['REMOTE_ADDR']."')";
			$data = $this->database->query($insert);
		}else{
			$insert = "INSERT INTO `store_sessions`(`user_id`, `session_start`, `session_end`, `session_code`, `user_ip`)VALUES('1', '".time()."', '".$thetime."', '".$session_code."', '".$_SERVER['REMOTE_ADDR']."')";
			$data = $this->database->query($insert);
		}
	}
	
	public function activateSessions($user)
	{
		$this->user = $user;
		
		//Data ophalen.
		$query1 = "SELECT * FROM `cms_users` WHERE `email`='".$this->user."'";
		$dataa = $this->database->query($query1);
		
		$userid = $dataa->user_id;
		
		$query = "SELECT * FROM `store_sessions` WHERE `user_id`='".$userid."'";
		$data = $this->database->query($query);
		
		if($data != "")
		{
			$_SESSION['CODE'] = $data->session_code;
			$_SESSION['USER_ID'] = $data->user_id;
			$_SESSION['START'] = $data->session_start;
			$_SESSION['END'] = $data->session_end;
			$_SESSION['IP'] = $data->user_ip;
		}
	}
	
	public function checkSession()
	{
		//Haal de USER_ID van de Session binnen.
		$this->userid = $_SESSION['USER_ID'];
		
		
		if($this->userid != ""){
		//Stel de query samen
		$query = "SELECT * FROM `store_sessions` WHERE `user_id`='".$this->userid."'";
		
		//Controlleer hoeveel Rows er zijn van dit ID
		$rows = $this->database->countRows($query);
		
		//Als er meer dan 1 rows is dan.
		if($rows > 1){
			
			//Count de rows en trek er 1 van af zo dat hij overblijft
			$delRows = $rows - 1;
			
			//Bouw de query op
			$query = "DELETE FROM `store_sessions` ORDER BY `session_id` ASC LIMIT ".$delRows."";
			
			//Verbind de query met PDO
			$this->database->deleteData($query);
				
		}else{
			$data = $this->database->query($query);
			
			//Stop de huidige tijd in een variable
			$thetime = time();
			
			// Tel een kwartier op.
			$newtime = $data->session_end + 900;
			
			if($thetime > $newtime){
				session_destroy();		
				$loggedin = false;	
			}else{
				$query = "UPDATE `store_sessions` SET `session_end`='".$newtime."' WHERE `user_id`='".$this->userid."'";
				$this->database->query($query);
				
				$loggedin = true;			
			}
			
		}
		
		if($loggedin == true){
			return true;	
		}else{
			return false;
		}
		}
	}
	
	public function sessionDestroy()
	{
		
		//Haal de USER_ID van de Session binnen.
		$this->userid = $_SESSION['USER_ID'];
		
		//Haal de huidige sessie op
		$query = "SELECT * FROM `store_sessions` WHERE `user_id`='".$this->userid."'";
		$data = $this->database->query($query);
		
		$newQuery = "INSERT INTO `login_history`(`user_id`, `session_start`, `session_end`, `date`)VALUES('".$this->userid."', '".$data->session_start."', '".$data->session_end."','".date("Y-m-d")."')";
		$this->database->query($newQuery);
		
		$delquery = "DELETE FROM `store_sessions` WHERE `user_id`='".$this->userid."'";
		$this->database->deleteData($delquery);	
	}
}
?>