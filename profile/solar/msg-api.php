<?php 
// this script handle ajax request well it a version of sendmail.php (notofficial)
// this script require the following post request 
//$_POST['to']
//$_POST['body'];
//$_POST['subject'];
//$_POST['password']

function contactmsg () {
    
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        return' Data can only be sent on this server via a POST Request';
         }

    if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
        $admin_email = 'xyluz@ymail.com';
        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');

    

 $error = [];

    if(isset($_POST['to'])){
   
        $to = $_POST['to'];
   
        if($to == '' || $to == ' ') {
        $error[] = 'sender email cannot be empty.';
             }

}
    if(isset($_POST['body'])){
   
        $message = $_POST['body'];
   
         if($message == '' || $message == ' ') {
            $error[] = 'Message cannot be empty.';
             }

}

    
 
  if(isset( $_POST['subject'])){
    $subject = $_POST['subject'];

        if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.'.$_POST['password'];
            } 
}
 
  if(isset( $_POST['password'])){
    $sent_password = $_POST['password'];

        if($sent_password == '' || $sent_password == ' ') {
            $error[] = 'password cannot be empty.';
        } 
}

 

    if(count($error) > 0){
            $error = implode("<br>",$error);
    return $error;

            }
    

   

        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
       try {
         $con = new PDO($dsn, $config['username'], $config['pass']);

            }

//catch exception
        catch(Exception $e) {
                return 'Message: ' .$e->getMessage();
            }

     if(isset($con)){

        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

        }else {
    return "Error Fetching Data";

        }
   
    if($sent_password != $password) {
        $error[] = 'You have sent an invalid password, please try again.';

        $error = implode("<br>",$error);
    return $error;      

    }

     /**
         * No error encontered, we can now send the mail.
         */

         require_once('PHPMailer/PHPMailerAutoload.php');

        $mail = new PHPMailer();

        $mail->isSMTP();

        $mail->SMTPAuth = true;
        //$mail->SMTPDebug =  2;

        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'mail.jointhands.net';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = "hng@jointhands.net";
        $mail->Password = 'QwertyUiop10/';
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->SetFrom('hng@jointhands.net');
        $mail->AddAddress($to);
        $mail->AddCc($admin_email);

         if(!$mail->send()) {
           return 'Message sending failed <br/>'.$mail->ErrorInfo;
         } else {
           /**
            * Mail has been sent successfully
            *
            * We can redirect them back to the person's profille
            * or we can just tell them that its successful here
            */

           return 'Message sent Successfuly!';
         }

// the generation of new password is handled by sendmail.php
// i love to join the code together 
// since this is POST and Sendmail.php is GET




    


}
}

echo (contactmsg());
