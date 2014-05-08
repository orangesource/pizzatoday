<?php
class checkForm extends database{
	
	public $user;
	public $password;
	public $getDB;	
	
	public function __construct()
	{
		
	}
	
	public function setUserdata($user, $password)
	{
		$this->user = $user;
		$this->password = $password;	
	}
	
	public function notEmpty()
	{
		if($this->user == "" OR empty($this->user))
		{
			return false;	
		}else{
			return true;	
		}
	}
	
	public function allowedEmail()
	{
		if(filter_var($this->username, FILTER_VALIDATE_EMAIL) == true){
			return true;
		}else{
			return false;	
		}
	}
	
	public function emailExist()
	{	
		$db = $this->getDB();
		$stmt = $this->db->query("SELECT `email` FROM `cms_users` WHERE `email`='".trim($this->user)."'");
		if($stmt->rowCount() > 0){
			return true;	
		}else{
			return false;	
		}
	}
	
}
?>