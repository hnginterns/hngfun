<?php
     if(isset($_POST['submit'])){
    	$config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password LIMIT 1');
        $data = $result->fetch();
        $to = "udomcosmas@gmail.com";
        $password = $data['password'];
        $subject = "new message";
        $full_name = $_POST['name'];
        $body = $_POST['message'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);
     }
     else{
         header("location: udom.php");
     }
?>

