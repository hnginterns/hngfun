<?php
if (isset($_POST['submit'])){
    $error = [];


    $to = 'nsikakthompson73@gmail.com';
    $senderName = $_POST['name'];
    $body = $_POST['message'];
    $subject = $_POST['subject'];

    if (trim($body) == '') {
        $error[] = 'Message cannot be empty.';
    }

    if (trim($senderName) == '') {
        $error[] = 'Name cannot be empty';
    }
    if (trim($subject) == '') {
        $error[] = 'Subject cannot be empty';
    }
    if (empty($error)) {
        $config = include __DIR__ . "/../config.php";

        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $conn = new PDO($dsn, $config['username'], $config['pass']);

        $statement = 'SELECT * FROM password LIMIT 1';
        $query = $conn->query($statement);

        $row = $query->fetch();
        $password = $row['password'];

        header("location: ../sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);

    }
}
else{
    header("location: nsikakthompson.html");
}
 ?>