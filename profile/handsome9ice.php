<?php
    if(isset($_POST['process'])){

       $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];

       $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

       $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $name = $_POST['name'];
		$email = $_POST['email'];
		$dropdown = $_POST['dropdown'];
		$message = $_POST['message'];
		$formcontent="From: $name \n Message: $message";
		$recipient = "keresifon.ekpo@gmail.com";
		$subject = "Contact Form";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader)
   }else{
        header("location: handsome9ice.html");
    }
?>