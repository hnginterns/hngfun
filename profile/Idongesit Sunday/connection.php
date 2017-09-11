<?php

interface DatabaseConnectionInterface {

   public function createConnection($host,$database_name,$username,$password);

}

?>