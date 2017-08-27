<?php
$db_host = "46.101.104.14";
$db_username = "intern";
$db_password = "@hng.intern1";
$db_name = "@hng.intern1";
$link = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to server');

function getPass() {
   global $link;
   $query = $link->query("SELECT password FROM PASSWORD LIMIT 1");
   while($getAll = mysqli_fetch_array($query)) {
      $pass = $getAll['password'];
   }
   return $pass;
}

?>
