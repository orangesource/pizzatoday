<?php
class checkForm extends database{
	
	public $username;
	public $password;
	public $db;
	public $getDB;
	
	public function __construct()
	{
		$dbh = new database;
		$db = $dbh->getDB();
	}
	
	public function setUserdata($username, $password)
	{
		$this->username = $username;
		$this->password = $password;	
	}
	
	public function notEmpty()
	{
		if($this->username == "" OR empty($this->username))
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
		$db = new database();
		$getDB = $db->getDB();
		
		$stmt = $getDB->query("SELECT `email` FROM `cms_users` WHERE `email`='".trim($this->username)."'");
		if($stmt->rowCount() > 0){
			return true;	
		}else{
			return false;	
		}
	}
	
}
?>