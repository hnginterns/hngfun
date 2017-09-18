<?php
    if(isset($_POST['subject'])){
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
        $body = $_POST['message'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=victorchimobi@yahoo.com");
  
    }else{
<<<<<<< HEAD:profile/victorbest34.php
        header("location: victorbest34.html");
=======
<<<<<<< HEAD
        header("location: iwa_temmy/iwa_temmy.html");
=======
        header("location: iwa_temmy.html");
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
>>>>>>> 10102c15c7b9faeed00255e89bbe69c6a2502ca7:profile/iwa_temmy/iwa_temmy.php
    }
?>
