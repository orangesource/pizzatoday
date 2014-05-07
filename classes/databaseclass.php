<?php
class database{
	
	protected $host = "localhost";
	protected $dbname = "pizzatoday";
	protected $username = "root";
	protected $pass = "";
	protected $database;
	public $db;
	
	private function setSettings($host, $dbname, $username, $pass)
	{
		$this->host = $host;
		$this->dbname = $host;
		$this->username = $host;
		$this->pass = $host;
	}
	
	public function createConnect()
	{
		$db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->username, $this->pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
		$this->database = $db;
	}
	
	public function getDB()
	{
		return $this->database;	
	}
	
	
	
}
?>