<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'ukahbethel@gmail.com';
    $body = $_POST['message'];
    if($body == '' || $body == ' ') {
      $error[] = 'Message box empty.';
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject Empty';
    }
    if(empty($error)) {
      $config = include(dirname(dirname(__FILE__)).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
      header("location: $uri");
    }
  }
?>
