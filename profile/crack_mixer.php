<?php

 $config = include('../../config.php');
  $dsn = 'mysql:host='.$config['46.101.104.14'].';dbname='.$config['intern'];
  $con = new PDO($dsn, $config['intern'], $config['@hng.intern1']);
  $result = $con->query('SELECT * FROM password LIMIT 1');
  $data = $result->fetch();
  
 $password = $data['password'];
  $subject = $_POST['subject'];
  $body = $_POST['body'];
    
 header("location:../../sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=ruggedemails@gmail.com");

 
?>
