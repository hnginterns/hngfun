<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 602f84c91267292aee7924db9b175efaa7ac8daa

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
=======
<<<<<<< HEAD
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 602f84c91267292aee7924db9b175efaa7ac8daa
=======
<<<<<<< HEAD
=======
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
>>>>>>> 60fcd6351455171d1c9c607fe5bb61c4be3bb793

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
=======
<<<<<<< HEAD
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 60fcd6351455171d1c9c607fe5bb61c4be3bb793
>>>>>>> 82a0e638c53e8e58b5cad31287f57a7f04ecc26c
