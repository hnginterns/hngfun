<<<<<<< HEAD
<<<<<<< HEAD

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
        $to = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("location: /sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);

   }else{
        header("location: /index.html");
    }
?>
=======
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76

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
        $to = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("location: /sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);

   }else{
        header("location: /index.html");
    }
?>
<<<<<<< HEAD
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
