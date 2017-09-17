<?php 
	class IOhandler{	
		public function __construct(){
	 		include('dbconfig.php');
	 		$db = new connect();
        	$this->DBcon = $db->startConn();
		}

		public function getAll($table){
			$SQL = "SELECT * FROM $table LIMIT 1";
			$q = $this->DBcon->query($SQL) or die("Failed");
			while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
				$data[] = $r;
			}
			return $data;
		}
	}		
?>
