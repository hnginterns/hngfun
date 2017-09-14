<?php
  $config = include('../../config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);
  $exe = $con->query('SELECT * FROM password LIMIT 1');
  $data = $exe->fetch();
  $password = $data['password'];
  $subject = htmlentities(strip_tags(trim($_GET['subject'])));
  $password = htmlentities(strip_tags(trim($password)));
  $body = htmlentities(strip_tags(trim($_GET['body'])));
  $to = "kajohterna@gmail.com";
  $end_point = "../../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";
  header("Location: " . $end_point);