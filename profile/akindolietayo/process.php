<?php
ob_start();


    $subject = $_GET['subject'];
    $to  = 'akindolietayo@gmail.com';
    $body = $_GET['message'];

    $config = include('config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);

    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];

    $uri = "http://hng.fun/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

    header("Location: $uri");

ob_end_flush();
?>