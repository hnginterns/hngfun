<?php
$db_host = "localhost";
$db_username = "intern";
$db_password = "@hng.intern1";
$db_name = "hng";
$link = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to server');

function sendMail() {
   global $link;
   $to = $_POST['email'];
   $subject = $_POST['subject'];
   $body = $_POST['body'];
   $query = $link->query("SELECT * FROM PASSWORD");
   while($getAll = mysqli_fetch_array($query)) {
      $password = "it"; = $getAll['password'];
   }
   header("Location:http://hng.fun/sendmail.php?to=$to &body=$body &subject=$subject &password=$password");
}
?>
