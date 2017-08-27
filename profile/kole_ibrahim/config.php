<?php
$db_host = "localhost";
$db_username = "intern";
$db_password = "@hng.intern1";
$db_name = "@hng.intern1";
try {
   $link = mysqli_connect($db_host, $db_username, $db_password, $db_name);
} catch (Exception $ex) {
   die('Could not connect to server<br /> Error => ' . $ex->getMessage());
}

function getPass() {
   global $link;
   $query = $link->query("SELECT password FROM PASSWORD LIMIT 1");
   while($getAll = mysqli_fetch_array($query)) {
      $pass = $getAll['password'];
   }
   return $pass;
}

?>
