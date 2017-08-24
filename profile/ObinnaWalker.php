<?php
    if(isset($_POST['submit'])){

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
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        header("location: ../sendmail.php?password=".$password."&subject=".$subject."&message=".$message."&to=obinnawalker@gmail.com");

    }else{
        header("location: ObinnaWalker.php");
    }
?>
