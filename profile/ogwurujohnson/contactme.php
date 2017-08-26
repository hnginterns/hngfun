<?php
/**
 * Created by PhpStorm.
 * User: BlackHatJohnny
 * Date: 8/26/2017
 * Time: 1:56 PM
 */
//locate Configuration file from app directory
$admin_email = "xyluz@gmail.com";
$configuration = include('../../config.php');
//specify db configuration and specifications such as DB name(note:DB name = "hng";username = intern;password = @hng.intern1)
$db_config = "mysql:host=".$configuration["host"].";dbname= ".$configuration["dbname"];
//create a connection to the DB
$connection = new PDO($db_config, $configuration["username"], $configuration["pass"]);

//we would now fetch all passwords in the DB
$fetch = $connection->query("SELECT * FROM password LIMIT 1");
$result = $fetch->fetch();
$password = $result["password"];


$error = [];
if($_SERVER["REQUEST_METHOD"] == "GET") {
     if(isset($_GET["name"]) && isset($_GET["message"])){
        $to = "ogwurujohnson@gmail.com";
        $name = $_GET["name"];
        $message = $_GET["message"];
        $from = $_GET["email"];
        $subject = "Mail From Intern Evaluation Team via" . ($from) . "\n";
        //header that would appear at the mail
        $headers = "From:" . ($from) . "\n";

        if ($message == '' || $message == ' ') {
            $error[] = 'Message cannot be Empty please.';
        }
        if ($from == '' || $from == ' ') {
            $error[] = 'You might want to let the owner of the form know who sent the mail, please.';
        }
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        if (!preg_match($email_exp, $from)) {
            $error[] = 'The Email Address you entered does not appear to be valid.';
        }
        $string_exp = "/^[A-Za-z .'-]+$/";

        if (!preg_match($string_exp, $name)) {
            $error[] = 'The First Name you entered does not appear to be valid.';
        }

        if (empty($error)) {
            $message = urlencode($message);
            header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to");
        }
    }
}
