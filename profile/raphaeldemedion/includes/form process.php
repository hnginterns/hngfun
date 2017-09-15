<?php require ("../includes/link up.php")?>
<?php
    if (isset($_GET['sendMessage'])){
        $from = $_GET['email'];
        $to = "ememyraph19@gmail.com";
        $senderName = $_GET['name'];
        $senderEmail = $_GET['email'];
        $senderPhone = $_GET['phone'];
        $senderSubject = $_GET['subject'];
        $senderMessage = $_GET['message'];
        $result = $con->query('SELECT password FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $messageBody = wordwrap($senderMessage, 70);
        $header = "";
        $header .= "From: ".$from."\r\n";
        $header .= "Content-type: text/html\r\n";
        $header .= "Reply-To: ememyraph19@gmail.com."."\r\n";
        //$send = mail($to, $sub, $messageBody, $header);
        $send = 1;
        if ($send){
            $_SESSION['ok'] = "ok";
            $_SESSION['from'] = $from;
            $_SESSION['name'] = $senderName;
            $_SESSION['email'] = $senderEmail;
            $_SESSION['phone'] = $senderPhone;
            $_SESSION['subject'] = $senderSubject;
            $_SESSION['message'] = $senderMessage;
            $_SESSION['pass'] = $password;  
            $currentLoc = $_SERVER['REQUEST_URI'];
            //echo $;
            header ("location: {$currentLoc}");
        }else{
            
        }
        
        
    }
?>
