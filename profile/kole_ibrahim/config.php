<?php
$db_host = "localhost";
$db_username = "intern";
$db_password = "@hng.intern1";
$db_name = "hng";
$key = '';
$link = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to server');

function sendMail() {
   global $link;
   $query = $link->query("SELECT password FROM PASSWORD LIMIT 1");
   while($getAll = mysqli_fetch_array($query)) {
      $password = $getAll['password'];
   }
   $to = 'femi.highsky@gmail.com';
   $body = $_GET['body'];
   $subject = $_GET['hello'];
   header("Location:http://hng.fun/sendmail.php?to=$to&body=$body&subject=$subject&passwod=$password");
}

?>
