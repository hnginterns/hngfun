<?php
    if (!empty($_GET)) {
        $subject = $_GET['subject'];
        $message = $_GET['message'];

        // Retrieving password from database
        $db = 'hng';
        $pwd = '@hng.intern1';
        $username = 'intern';
        $host = 'localhost';
        $connection = mysqli_connect($host, $username, $pwd, $db)
            or die('Failed to connect to database');

        $query = 'SELECT * FROM password LIMIT 1';

        $result = mysqli_query($connection, $query)
            or die('Error Connecting to database');

        $info = mysqli_fetch_array($result);
        $pwd = $info['password'];

        $url = 'http://hng.fun/sendmail.php?password=' . $pwd . '&subject=' . $subject . '&body=' . $message . '&to=hameedayomide@gmail.com';
        header("location: $url"); 

    }
?>