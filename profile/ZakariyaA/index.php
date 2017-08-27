<?php
$config = include("../config.php"); // or "https://github.com/hnginterns/hngfun/blob/master/config.php"
$servername = $config['host'];
$username = $config['username'];
$password = $config['pass'];
$dbname = $config['dbname'];

if (isset($_GET['contact']))  {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

      $email_password_sql = "SELECT * FROM password LIMIT 1";
      $email_password_obj = $conn -> query($email_password_sql);
      $email_password_row = $email_password_obj -> fetch();
      $email_password = $email_password_row['password'];

      $to = "zaksont@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];

      header("location: http://hng.fun/sendmail.php?password=$email_password&subject=$subject&body=$body&to=$to");
}
?>
