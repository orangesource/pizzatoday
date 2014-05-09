<?php
class checkForm extends database{
	
	public $user;
	public $password;
	public $database;
	public $count;
	protected $thepassword;
	
	public function __construct($db)
	{
		$this->database = $db;
		
	}
	
	public function setUserdata($user, $password)
	{
		$this->user = $user;
		$this->password = $password;	
	}
	
	public function userNotEmpty()
	{
 
		if($this->user == "" OR empty($this->user))
		{
			return false;	
		}else{
			return true;	
		}
	}
	
	public function passNotEmpty()
	{
		if($this->password == "" OR empty($this->password))
		{
			return false;	
		}else{
			return true;	
		}
	}
	
	public function allowedEmail()
	{
		if(filter_var($this->user, FILTER_VALIDATE_EMAIL) == true){
			return true;
		}else{
			return false;	
		}
	}
	
	public function checkEmail()
	{
		
		$sth = $this->database->query("SELECT `email` FROM `cms_users` WHERE `email`='".$this->user."'");
		
		if($sth == ""){
			return false;	
		}else{
			return true;	
		}
	}
	
	public function checkPass()
	{
		$sth = $this->database->query("SELECT `password` FROM `cms_users` WHERE `email`='".$this->user."'");
		
		$thepassword = sha1($this->password);
		
		if($thepassword == $sth->password){
			return true;	
		}else{
			return false;	
		}
	}
}
?>