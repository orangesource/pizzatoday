<?php
class CUS extends database{
	//CUS = Create Unique Session
	
	public $session_code;
	protected $userid;
	
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
		$query = "SELECT * FROM `store_sessions` WHERE `session_code`='".$session_code."'";
		$data = $this->database->query($query);
		
		if($data != ""){
			for ($i = 0; $i < $length; $i++) {
				$code = mt_rand(0, $valNumb - 1);
				$session_code .= $ValChars[$code];
			}
			
			$insert = "INSERT INTO `store_sessions`(`user_id`, `session_start`, `session_end`, `session_code`, `user_ip`)VALUES('1', '".time()."', '0', '".$session_code."', '".$_SERVER['REMOTE_ADDR']."')";
			$data = $this->database->query($insert);
		}else{
			$insert = "INSERT INTO `store_sessions`(`user_id`, `session_start`, `session_end`, `session_code`, `user_ip`)VALUES('1', '".time()."', '0', '".$session_code."', '".$_SERVER['REMOTE_ADDR']."')";
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
}
?>