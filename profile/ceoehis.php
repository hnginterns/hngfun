<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error = [];

        $name = $_POST['name'];
        $to = 'ceo.ehis@outlook.com';
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if($name == '' || $name == ' ') {
          $error[] = 'Message cannot be empty!';
        }
        if($subject == '' || $subject == ' ') {
          $error[] = 'Message cannot be empty!';
        }
        if($message == '' || $message == ' ') {
          $error[] = 'Message cannot be empty!';
        }
        if(empty($error)) {
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
            $password = $data['password'];
            header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$message."&to=".$to."");
        }else{
            header("location: ceoehis.html");
        }
    }
?>
