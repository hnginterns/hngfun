<?php
     if(isset($_POST['submit'])){
    	$config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password LIMIT 1');
        $data = $result->fetch();
        $to = $_POST['to'];
        $password = $data['password'];
        $subject = $_POST['subject'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name']
        $body = $_POST['body'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);
     }
     else{
         header("location: AniekanUmana.html");
     }
?>