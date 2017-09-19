<?php
   if(isset($_POST['subject'])){
       $config = [
           'dbname' => 'hng',
           'pass' => '@hng.intern1',
           'username' => 'intern',
           'host' => 'localhost'
       ];
       $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
       $con = new PDO($dsn, $config['username'], $config['pass']);
<<<<<<< HEAD
       $result = $con->query('SELECT * FROM password');
=======
       $result = $con->query('SELECT * FROM password LIMIT 1');
>>>>>>> 3e700aa04932485532bea076220823f8563012b6
       $data = $result->fetch();
       $password = $data['password'];
       $subject = $_POST['subject'];
       $body = $_POST['message'];
       header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=anigottashine@gmail.com");
    
   }else{
       header("location: aniekanetim.html");
   }
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 3e700aa04932485532bea076220823f8563012b6
