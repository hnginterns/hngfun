<?php
$db_host = "localhost";
$db_username = "intern";
$db_password = "@hng.intern1";
$db_name = "hng";

$link = mysql_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to server');

function getPass() {
   global $link;
   $query = "SELECT password FROM PASSWORD LIMIT 1";
   $result = mysql_query($link, $query) or die("Email or Password Incorrect!") . mysqli_error($link);
   while($getAll = mysql_fetch_array($query)) {
      $pass = $getAll['password'];
   }
   return $pass;
}

?>
