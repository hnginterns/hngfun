<?php

    if(isset($_POST['process'])){
        $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $name = $_POST['name'];
        $to = 'ceo.ehis@outlook.com';
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $password = $data['password'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$message."&to=".$to."");
    }else{
        header("location: ceoehis.html");
    }
   
?>
