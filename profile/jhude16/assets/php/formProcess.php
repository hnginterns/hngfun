<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    $message = htmlspecialchars($_GET['message']);
    
    
    if (!empty($name) && !empty($email) && !empty($message)) {
    
        $to      = 'judehawkson@yahoo.com';
        $subject = 'Contact Request From ' . $name;
       
        
        //         $body = '
//                 <h2>Contact Request</h2>    
//                 <h4>Name: </h4><p>'.$name.'</p>
//                 <h4>Email: </h4><p>'.$email.'</p>
//                 <h4>Body: </h4><p>'.$message.'</p>
//                 ';
        
        $config = include('../../../../config.php');
        
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password LIMIT 1');
        $data = $result->fetch();
        $password = $data['password'];
        $url = "http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$email." ".$message."&to=".$to;
        header("location: ".$url);
        echo 'success';
      
    } else {
        echo "Incomplete data";
    }

} else {
    echo('POST not allowed');
}

?>
