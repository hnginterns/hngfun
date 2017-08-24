<?php 
class connect{
    public function __construct(){
        $dbconfig = require_once __DIR__ . '\config.php';
        $this->dbhost = $dbconfig['host'];
        $this->dbuser = $dbconfig['username'];
        $this->dbpass = $dbconfig['pass'];
        $this->dbname = $dbconfig['dbname'];
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