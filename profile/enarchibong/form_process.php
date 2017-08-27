<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    
    $subject = $_POST['subject'];
    $to  = 'enomfon.archibong@gmail.com';
    $body = $_POST['message'];
    $name = $_POST['name'];
    
    if(empty($subject)) {
      $error[] = 'Subject cannot be empty.';
    }
    if(empty($name)) {
      $error[] = 'Name cannot be empty.';
    
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
      $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&name=$name&password=$password";
      header("location: $uri");
    }
  }
 
