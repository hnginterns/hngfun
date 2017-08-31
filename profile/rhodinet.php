<?php
  if(isset($_POST['process'])){
      $config = include('../config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $result = $con->query('SELECT * FROM password');
      $data = $result->fetch();
      $password = $data['password'];
      $subject = $_POST['subject'];
      $body = $_POST['body'];
      header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=rhodimosokon@gmail.com");
  }else{
      header("location: rhodinet.html");
  }
?>