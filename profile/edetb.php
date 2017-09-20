<<<<<<< HEAD
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
       header("location:http://hng.fun/sendmail.php?password=".$password. "&subject=".$subject."&body=".$body."&to=bebetoudofia2016@gmail.com");
   }else{
       header("location: edetb.html" );
   }
?>
=======
<?php
<<<<<<< HEAD
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
       header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=bebetoudofia2016@gmail.com");
   
   }else{
       header("location: edetb.html");
   }
?>
>>>>>>> 73e8da0c8c201bdec169b4c2378712be0c0381f8
=======
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
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=yiungemiqueena@gmail.com");
    
    }else{
        header("location: emiqueena.html");
    }
?>
>>>>>>> 60fcd6351455171d1c9c607fe5bb61c4be3bb793
>>>>>>> 82a0e638c53e8e58b5cad31287f57a7f04ecc26c
