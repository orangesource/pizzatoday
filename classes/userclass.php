<?php
class userData extends database{
	
	public function __construct($db)
	{
		$this->database = $db;
		
	}
	public function getUserID($user)
	{
		$this->user = $user;
		$query = "SELECT `user_id` FROM `cms_users` WHERE `email`='".$this->user."'";
		$data = $this->database->query($query);
		
		if($data != ""){
			return $data->user_id;
		}else{
			return "Geen resultaten";	
		}
	}
}
?>