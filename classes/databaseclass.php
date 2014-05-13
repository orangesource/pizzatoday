<?php
class database extends PDO{
	private $host, $dbname, $username, $pass;
	protected $row_count, $dbb;
	public  $db;

	public function __construct()
	{
			 
	}
	
	public function startConnect($host, $dbname, $username, $pass)
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
	
	public function countRows($query)
	{
		$sth = $this->db->query($query);
		$row_count = $sth->rowCount();
		return $row_count;
	}
	public function deleteData($query)
	{
			$sth = $this->db->query($query);
			return true;
		
	}
	
	
}
?>