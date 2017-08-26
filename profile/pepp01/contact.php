<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
      $subject = $_POST['subject'];
      $to  = 'slpepple01@gmail.com';
      $body = $_POST['message'];
    
   if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
   if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
    
   if(empty($error)) {
     
     $config = include "../../config.php";

      $conn = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['username'], $config['pass']);
      
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      $exe = $con->query('SELECT * FROM password LIMIT 1');
     
      $data = $exe->fetch();
     
      $password = $data['password'];
    
     $url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

     header("location: $url");
   }
  }
 ?>