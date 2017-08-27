
<?php
if (isset($_REQUEST['submit'])){

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $subject = $_GET['subject'];
        $body = $_GET['message'];
        $to = 'ayobaymak@gmail.com';




        $config = include('../../config.php');
        $server = $config['host'];
        $con = mysqli_connect($server,$config['username'],$config['pass'],$config['dbname']);

        if (!$con) {
            die("Connection failed: ".mysqli_connect_error());
        }

        $sql = 'SELECT * FROM password LIMIT 1';

        if($result = mysqli_query($con, $sql)) {
            $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $password = $data['password'];
        } else {
            $password = "#";
        }


        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

        header("location: $uri");

        /*$config = include (dirname(dirname(dirname(__FILE__))).'/config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

        header("location: $uri");*/
    }
    else{
        echo "Please fill all fields!!!";
    }
}

?>