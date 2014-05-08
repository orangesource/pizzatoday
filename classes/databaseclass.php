<?php
class database{
	private $db, $host, $dbname, $username, $pass;
	/*public function __construct()
	{
		 $host = "localhost";
		 $dbname = "pizzatoday";
		 $username = "root";
		 $pass = "";
		 $database;
		 $db;
		
		$db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->username, $this->pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}*/
	
	public function __construct($host, $dbname, $username, $pass)
	{
		$this->host = $host;
		$this->dbname = $dbname;
		$this->pass = $pass;
		$this->username = $username;
		
		$this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->username, $this->pass);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 
	}
	public function query($query)
	{
		$sth = $this->db->query($query);
		$data = $sth->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	
	public function createConnect()
	{
	
		//$this->db = $db;
	}
	
	public function getDB()
	{
	//	print_r( $this->db );	
	}
	public function test()
	{
		return $this->db;	
	}
}
?>