
<?php
if (isset($_REQUEST['submit'])){

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $subject = $_POST['subject'];
        $body = $_POST['message'];
        $to = 'ayobaymak@gmail.com';

        $config = include (dirname(dirname(dirname(__FILE__))).'/config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

        header("location: $uri");
    }
    else{
        echo "Please fill all fields!!!";
    }
}

?>