<?php
    if(isset($_POST['submit'])){
        $config = [
            'dbname' => 'hngintern',
            'pass' => '',
            'username' => 'root',
            'host' => 'localhost'
        ];
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['message'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=silassilasm@gmail.com");
    
    }else{
        header("location: precious.html");
    }
?>
    
