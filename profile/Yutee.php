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
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=yuteenightxi@gmail.com");
	
    }else{
<<<<<<< HEAD:profile/Yutee.php
        header("location: Yutee.html");
=======
<<<<<<< HEAD
<<<<<<< HEAD
        header("location: iwa_temmy/iwa_temmy.html");
=======
        header("location: iwa_temmy.html");
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
        header("location: iwa_temmy.html");
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 602f84c91267292aee7924db9b175efaa7ac8daa:profile/iwa_temmy/iwa_temmy.php
    }
?>
