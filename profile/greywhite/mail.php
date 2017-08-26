<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
     $error = [];
     $subject = $_POST['subject'];
     $to  = 'soguazu@gmail.com';
     $body = $_POST['message'];
     if($body == '' || $body == ' ') {
       $error[] = 'Message cannot be empty.';
     }
     if($subject == '' || $subject == ' ') {
       $error[] = 'Subject cannot be empty.';
     }
     if(empty($error)) {

       $servername = "localhost";
       $username = "intern";
       $password = "@hng.intern1";
       $dbname = 'hng';

       $config = "mysql:host=".$servername.";dbname=".$dbname;
       $conn = new PDO($config, $username, $password);
       $execute = $conn->query("SELECT * FROM password LIMIT 1");
       $data = $execute->fetch();
       $password = $data["password"];
       $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
       header("location: $uri");
     }
    }
?>