<<<<<<< HEAD
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
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=ukahbethel@gmail.com");
    
    }else{
        header("location: ukahbethel.html");
    }
?>
=======
<?php
    if(isset($_POST['process'])){
=======
<?php
    if(isset($_POST['submit'])){
>>>>>>> a4a353252a32839d14b678e61be5ed2aa13b3740
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
<<<<<<< HEAD
        $body = $_POST['body'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=ruggedemails@gmail.com");
    }else{
        header("location: crackmixer.html");
    }
?>
>>>>>>> 4448c2106c56962be1ffeeda7034f4813144306b
=======
        $body = $_POST['message'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=ukahbethel@gmail.com");
    
    }else{
        header("location: ukahbethel.html");
    }
?>

>>>>>>> a4a353252a32839d14b678e61be5ed2aa13b3740
