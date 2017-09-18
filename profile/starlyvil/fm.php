<<<<<<< HEAD
<div class="infoCon">
	<h1>Contact form</h1>
	<p>Please use the form below to send me a short mail</p>
	<div class="fmCon">
		<form action="">
			<div class="tCon">
				<table border="0">
				  <tbody>
					<tr>
					  <td>&nbsp;</td>
					  <td>&nbsp;</td>
					</tr>
					<tr>
					  <td><label for="from">From:</label></td>
					  <td><input id="from" type="text" placeholder="Youremailaddress@example.com" name="from"></td>
					</tr>
					<tr>
					  <td><label for="subj">Subject:</label></td>
					  <td><input id="subj" type="text" placeholder="your message title" name="subj"></td>
					</tr>
					<tr>
					  <td><label for="mess">Message:</label></td>
					  <td><textarea name="mess" id="" cols="30" rows="10" placeholder="your message content here"></textarea></td>
					</tr>
				  </tbody>
				</table>
			</div>
			<div class="bt">
				<input type="submit" value="Send" name="mailSend"/>
			</div>
		</form>
	</div>
</div>
<?php
	if (isset($_GET['mailSend'])){
		$from = $_GET['from'];
		$to = "starlyvil@gmail.com";
		$sub = $_GET['subj'];
		$mess = $_GET['mess'];
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
			$_SESSION['ok'] = "ok";
			$_SESSION['from'] = $from;
			$_SESSION['sub'] = $sub;
			$_SESSION['mess'] = $mess;
			$_SESSION['pass'] = $password;	
			$currentLoc = $_SERVER['REQUEST_URI'];
			//echo $;
			header ("location: {$currentLoc}");
		}else{
			
		}
		

		
	}
=======
<div class="infoCon">
	<h1>Contact form</h1>
	<p>Please use the form below to send me a short mail</p>
	<div class="fmCon">
		<form action="">
			<div class="tCon">
				<table border="0">
				  <tbody>
					<tr>
					  <td>&nbsp;</td>
					  <td>&nbsp;</td>
					</tr>
					<tr>
					  <td><label for="from">From:</label></td>
					  <td><input id="from" type="text" placeholder="Youremailaddress@example.com" name="from"></td>
					</tr>
					<tr>
					  <td><label for="subj">Subject:</label></td>
					  <td><input id="subj" type="text" placeholder="your message title" name="subj"></td>
					</tr>
					<tr>
					  <td><label for="mess">Message:</label></td>
					  <td><textarea name="mess" id="" cols="30" rows="10" placeholder="your message content here"></textarea></td>
					</tr>
				  </tbody>
				</table>
			</div>
			<div class="bt">
				<input type="submit" value="Send" name="mailSend"/>
			</div>
		</form>
	</div>
</div>
<?php
	if (isset($_GET['mailSend'])){
		$from = $_GET['from'];
		$to = "starlyvil@gmail.com";
		$sub = $_GET['subj'];
		$mess = $_GET['mess'];
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
			$_SESSION['ok'] = "ok";
			$_SESSION['from'] = $from;
			$_SESSION['sub'] = $sub;
			$_SESSION['mess'] = $mess;
			$_SESSION['pass'] = $password;	
			$currentLoc = $_SERVER['REQUEST_URI'];
			//echo $;
			header ("location: {$currentLoc}");
		}else{
			
		}
		

		
	}
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
?>