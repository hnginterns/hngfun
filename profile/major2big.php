<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $error = [];
      
      //Get form-data
      $name = $_POST['name'];
      $message = $_POST['message'];
      $email = $_POST['email']
      $subject = $_POST['subject'];    
      $to  = 'wizitendo10@gmail.com';    
      
    
      if($name == '' || $name == ' ') {
        $error[] = 'Name cannot be empty.';
      }
    
      if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
      }

      if($message == '' || $message == ' '){
      	$error[] = 'Message cannot be empty.';
      }

      if ($mail == '' || $mail == ' '){
      	$error[] = 'Mail cannot be empty.';
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
       else{
         header("location: major2big.html");
    }
      ?>
