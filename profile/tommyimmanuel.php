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
        $name = $_POST['name'];
       	$email = $_POST['email']
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&name=".$name."&email=".$email."&subject=".$subject."&body=".$body."&to=tommyimmanuel247@gmail.com");

    }else{
        header("location: tommyimmanuel.html");
    }
?>
