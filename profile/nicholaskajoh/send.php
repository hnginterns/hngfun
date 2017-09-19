<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
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
<<<<<<< HEAD
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
  header("Location: " . $end_point);