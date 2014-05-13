<?php
class userData extends database{
	
	public function __construct($db)
	{
		$this->database = $db;
		
		
	}
	
	public function setUserData($userid)
	{
		$this->userid = $userid;
		
		$query = "SELECT `user_id`, `surname`, `name` FROM `cms_users` WHERE `user_id`='".$this->userid."'";
		$data = $this->database->query($query);
		
		$this->userid = $data->user_id;
		$this->surname = $data->surname;
		$this->name = $data->name;
	}
	
	public function getUserID($user)
	{
		
		$query = "SELECT `user_id` FROM `cms_users` WHERE `email`='".$this->user."'";
		$data = $this->database->query($query);
		
		if($data != ""){
			return $data->user_id;
		}else{
			return "Geen resultaten";	
		}
	}
	
	public function getUsername()
	{
		return $this->surname;
	}
}
?>