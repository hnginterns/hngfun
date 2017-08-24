<?php 



function contactmsg () {

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{

 $error = [];

    $to  = 'okalawonemmanuel41@gmail.com';
    if(isset($_POST['message'])){
   
        $body = $_POST['message'];
   
         if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
             }

}

    
 
  if(isset( $_POST['subject'])){
  $subject = $_POST['subject'];

    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
    } 
}

if(count($error) > 0){
    $error = implode("<br>",$error);
return "<span class = 'error'>".$error."</span>";

}
    

   

    if(empty($error) ){

        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
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
    return "Database Error";

}
   
try {

        $uri = "/sendmailajax.php?to=$to&body=$body&subject=$subject&password=$password";

}

//catch exception
catch(Exception $e) {
return 'Message: ' .$e->getMessage();
}



} else{

    return $error;
}


}


}

echo (contactmsg());
