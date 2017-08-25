<?php
include_once 'config.php';
class MyPDO {
	public $connection;
	private $statement;

	function __construct(){
		$this->open_connection();
	}

	public function open_connection(){
		try {
			$this->connection = new PDO (DB_DNS,DB_USER,DB_PASSWORD);	
		} catch (PDOException $e){
			print 'Error!: '.$e->getMessage();
			die();
		}		
	}

	public function close_connection(){
		$this->connection = null;
		$this->statement  = null;
	}	
}
$database = new MyPDO();
?>