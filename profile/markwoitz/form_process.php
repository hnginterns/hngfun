<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    
    $subject = $_POST['subject'];
    $from = $_POST['email'];
    $to  = 'icnwakanma@gmail.com';
    $body = $_POST['message'];
    
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $name_error = "Only letters and white space allowed"; 
        }
      }
    
      if (empty($_POST["email"])) {
        $email_error = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $email_error = "Invalid email format"; 
        }
      }
      
      if (empty($_POST["subject"])) {
        $title_error = "A subject is required";
      } else {
        $title = test_input($_POST["subject"]);
       }
      }
    
      if (empty($_POST["message"])) {
        $message = "";
      } else {
        $message = test_input($_POST["message"]);
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
  
 ?>
