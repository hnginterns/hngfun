<?php
if(empty($_POST['subject'])|| empty($_POST['message']) || empty($_POST['subject'])){
    header('location: index.html');
    return;
}
$config = require_once('../../config.php');
$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
try{
    $con = new PDO($dsn, $config['username'], $config['pass']);

    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];
}catch(Exception $e){
    echo 'unable to  cotact data bank :(';
    return;
}


$subject = urlencode($_POST['subject']);
$message = urlencode($_POST['subject']);
$mail = "daponextraspp@gmail.com";
$requestString = "?password=$password&subject=$subject&body=$message&to=$mail";
echo 'I got here';
try{
    header('location: /sendmail.php'.$requestString);
}catch(Exception $e){
    echo 'Unable to send mail.';
}

?>