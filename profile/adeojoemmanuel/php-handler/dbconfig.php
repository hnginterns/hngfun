<?php 
	class connect{
		$config = include(dirname(dirname(dirname(dirname((__FILE__))).'config.php');
		private $dbhost = $confi['host'];
		private $dbuser = $config['username'];
		private $dbpass = $config['pass'];
		private $dbname = $config['dbname'];

		public function startConn(){
			$this->DBcon = null;
			try{
				$this->DBcon = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname, $this->dbuser, $this->dbpass);
			}catch(Exception $e){
				echo "error connecting:";
			}
			return $this->DBcon;
		}
	} 
?>
