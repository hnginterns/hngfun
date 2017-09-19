<?php
    $config = include('../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);
    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];
    if (isset($_GET['sendmessage'])) {
        $subject = "Hello";
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['body'])));
        $to = "olakes265@gmail.com";
        if (!isset($body) || $body == '' || (!isset($_GET['name'])) || $_GET['name'] == '' ) {
            echo "Form cannot be blank";
        }else {
            $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";
            header("Location: " . $location);
        }
    }
