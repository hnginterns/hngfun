
<?php
  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $error = "Oops! something went wrong";
    $Sub = $_POST['Sub'];
    $my_address  = 'mfnsumana@gmail.com';
    $txta = $_POST['txta'];
    if($txta == '' || $txta == ' ') {
      $error;
    }
    if($Sub == '' || $Sub == ' ') {
      $error;
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