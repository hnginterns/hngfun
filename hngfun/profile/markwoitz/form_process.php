<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    
    $subject = $_POST['subject'];
    $to  = 'icnwakanma@gmail.com';
    $body = $_POST['message'];
    
    if(empty($subject)) {
      $error[] = 'Subject cannot be empty.';
    }

    if(empty($body)) {
      $error[] = 'Message cannot be empty.';
    
    }
    
    if(empty($error)) {

      $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
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