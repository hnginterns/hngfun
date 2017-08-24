<?php 
class connect{
    public function __construct(){
        $config = require_once __DIR__ . '\config.php';
        $this->dbhost = $config['host'];
        $this->dbuser = $config['username'];
        $this->dbpass = $config['pass'];
        $this->dbname = $config['dbname'];
    }

    private $dbhost ;
    private $dbuser ;
    private $dbpass ;
    private $dbname ;

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