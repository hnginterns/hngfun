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
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
<<<<<<< HEAD
        header("location: ../sendmail.php?password=".$password."&subject=".$subject."&body=".$body."hayley.essien94@gmail.com");
=======
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=hayley.essien94@gmail.com");
>>>>>>> 2d9503c8309e33c70fd14ca09b80d2072a86a99c

    }else{
        header("location: aniekan.html");
    }
?>