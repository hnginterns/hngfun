<<<<<<< HEAD
=======
<<<<<<< HEAD
<?php
     if(isset($_POST['submit'])){
    	$config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password LIMIT 1');
        $data = $result->fetch();

        $to = $_POST['to'];
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);

     }
     else{
         header("location: AnietieEssien.html");
         
     }
=======
>>>>>>> 10102c15c7b9faeed00255e89bbe69c6a2502ca7
<?php
     if(isset($_POST['submit'])){
    	$config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password LIMIT 1');
        $data = $result->fetch();

        $to = $_POST['to'];
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);

     }
     else{
         header("location: AnietieEssien.html");
         
     }
<<<<<<< HEAD
=======
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
>>>>>>> 10102c15c7b9faeed00255e89bbe69c6a2502ca7
?>