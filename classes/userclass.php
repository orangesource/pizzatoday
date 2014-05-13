<?php
class userData extends database{
	
	public function __construct($db)
	{
		$this->database = $db;
		
<<<<<<< HEAD
	}
	public function getUserID($user)
	{
		$this->user = $user;
=======
		
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
		
>>>>>>> 6960a91d2bcfc7916b7411b7f5207f75cbb237b7
		$query = "SELECT `user_id` FROM `cms_users` WHERE `email`='".$this->user."'";
		$data = $this->database->query($query);
		
		if($data != ""){
			return $data->user_id;
		}else{
			return "Geen resultaten";	
		}
	}
<<<<<<< HEAD
=======
	
	public function getUsername()
	{
		return $this->surname;
	}
>>>>>>> 6960a91d2bcfc7916b7411b7f5207f75cbb237b7
}
?>