<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7b8637e8c329cbd2114e29802cbfdd2427df030d
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
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=ruggedemails@gmail.com");
    }else{
        header("location: crackmixer.html");
    }
<<<<<<< HEAD
=======
=======
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
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=ruggedemails@gmail.com");
    }else{
        header("location: crackmixer.html");
    }
>>>>>>> 91bb498bd26ad95912babad7c26c9159d3a3bf6a
>>>>>>> 7b8637e8c329cbd2114e29802cbfdd2427df030d
?>