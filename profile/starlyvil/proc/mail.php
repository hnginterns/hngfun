<?php require ("../ini/link.php")?>

<?php
	if (isset($_POST['id'])){
		$from = $_POST['from'];
		$sub = $_POST['subject'];
		$mess = $_POST['message'];
		$result = $con->query('SELECT password FROM password');
		$data = $result->fetch();
		$password = $data['password'];
		$messageBody = wordwrap($mess, 70);
		$header = "";
		$header .= "From: ".$from."\r\n";
		$header .= "Content-type: text/html\r\n";
		$header .= "Reply-To: starlyvil@gmail.com."."\r\n";
		//$send = mail($to, $sub, $messageBody, $header);
		$send = 1;
		 
		if ($send){	
			$rtn = [
				'status' => "ok",
				'subj' => $sub,
				'mess' => $messageBody,
				'pass' => $password
			];
			
			echo (json_encode($rtn));
		}else{
			
		}
		
	}
?>