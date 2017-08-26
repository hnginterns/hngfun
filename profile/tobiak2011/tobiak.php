<?php
if(isset($_POST['submit'])){
  $message_body = $_POST['body'];
  $aim_of_sender = $_POST['subject'];
  $email_of_sender = $_POST['to'];
  $config = include('../../config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);
  $result = $con->query('SELECT * FROM password LIMIT 1');
  $data = $result->fetch();
  $password = $data['password'];
  
  header('location:http://hng.fun/sendmail.php?password=".$password."&subject=".$aim_of_sender."&body=".$message_body."&to=".$email_of_sender"');
}
?>
