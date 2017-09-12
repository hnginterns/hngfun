<?php
    $user = 'intern';
    $pass = '@hng.intern1';
    $db = 'hng';
    $connect = new mysqli('localhost', $user, $pass, $db);
    mysqli_select_db($connect, 'password');
    $query ="SELECT * FROM password LIMIT 1";
    $passes = mysqli_query($connect, $query);
?> 