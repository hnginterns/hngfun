<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    
    $subject = $_POST['subject'];
    $to  = 'kebeeyong@gmail.com';
    $body = $_POST['message'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    
    if(empty($subject)) {
      $error[] = 'Please Enter a subject';
    }
    if(empty($mail)) {
      $error[] = 'Please Enter Your Email';
    }
    if(empty($name)) {
      $error[] = 'Please Enter Your Name';
    
    }

    if(empty($body)) {
      $error[] = 'Please Enter Message';
    
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
 