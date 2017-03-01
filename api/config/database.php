<?php
class Database 
{
	private $host = "localhost";
	private $db_name = "php_rest_api";
	private $username = "imon";
	private $password = "p@ssw0rd";
	public $conn;

	// get the database connection
	public function getConnection()
	{
		$this->conn = null;

		try {
			$this->conn = new PDO("mysql:host=". $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->exec("set names utf8");
		} catch(PDOException $exception){
			echo "Connection erro: " . $exception->getMessage();
		}

		return $this->conn;
	}
}

?>