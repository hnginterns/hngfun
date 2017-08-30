<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    $message = htmlspecialchars($_GET['message']);
    
    
    if (!empty($name) && !empty($email) && !empty($message)) {
    
        $to      = 'judehawkson@yahoo.com';
        $subject = 'Contact Request From ' . $name;
        $body = '
                <h2>Contact Request</h2>    
                <h4>Name: </h4><p>'.$name.'</p>
                <h4>Email: </h4><p>'.$email.'</p>
                <h4>Body: </h4><p>'.$message.'</p>
                ';
        
        $config = include('../../../../config.php');
        
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password LIMIT 1');
        $data = $result->fetch();
        
        $password = $data['password'];
        echo $config['host'];
        echo $password;
        echo 'Initialized!';
        url = "location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to;
        echo url;
        die();
//         header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);
            
        // $headers = "MIME-Version: 1.0"."\r\n";
        // $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
        // $headers .= "From: webmaster@example.com" . "\r\n" .
        //     'Reply-To: '. $email . "\r\n";

        
        // if (mail($to, $subject, $body, $headers)) {
        //     echo 'success';
        // } else {
        //     echo 'error';
        // }
        
    } else {
        echo "Incomplete data";
    }

} else {
    echo('what are you trying to do?');
}

?>
