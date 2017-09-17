<?php
  if(isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $error = [];
    $subject = isset($_POST['subject']);
    $to  = 'idee4ril@gmail.com';
    $body = isset($_POST['message']);
    if($body == '' || $body == ' ') {
      
    }
    if($subject == '' || $subject == ' ') {
      
    }
    //if(empty($error)) {
      $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      $url = "http://hng.fun/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
      header("location: $url");
    //}
  }
 ?>
