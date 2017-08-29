<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'beccadaniels1824@gmail.com';
    $body = $_POST['body'];
    if($body == '' || $body == ' ') {
      $error[] = "It's empty. Send me a message";
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'No subject?';
    }
    if(empty($error)) {
      $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      $url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
      header("location: $url");
    }
  }
 ?>
