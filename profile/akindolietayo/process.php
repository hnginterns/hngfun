<?php
ob_start();
  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    

    $error = [];

    $subject = $_GET['subject'];
    $to  = 'akindolietayo@gmail.com';
    $body = $_GET['message'];

    if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }


    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }

    if(empty($error)) {

      $config = include('config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $uri = "sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

      header("Location: $uri");

    }
  }
ob_end_flush();
 ?>