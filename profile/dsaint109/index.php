<?php
	#Author: Saints Webnology
	#Author URL: saintswebnology.com
	try
	{
		//initialize the configuration details
		$configuration = [
			'host' => 'localhost',
			'database' => 'hng',
			'username' => 'intern',
			'password' => '@hng.intern1'
		];
		//set the host and dbname into a variable
		$dsn = 'mysql:host='. $configuration['host'] .';dbname='. $configuration['database'];
		//Create the connection
		$connection = new PDO($dsn, $configuration['username'], $configuration['password']);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//With errors
		define("CONTACT_FORM", 'topstronics@gmail.com');//My email to receive the message
	}catch(PDOException $e)
	{
		//in case of connection failure
		echo $e->getMessage();
		die();
	}
	function ValidateEmail($value)
	{
		$regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
		if($value == '') { 
			return false;
		} else {
			$string = preg_replace($regex, '', $value);
		}
		return empty($string) ? true : false;
	}
	$post = (!empty($_POST)) ? true : false; //determine if the post request is empty 
	$showErrors=$showSuccess=false;
	if ($post) 
	{
		$name = stripslashes($_POST['name']); //Fix the name from post
		$email = trim($_POST['email']); //Fix the email from the post
		$subject = stripslashes($_POST['subject']); // Fix the subject from the post
		$message = stripslashes($_POST['message']); // Fix the message from the post
		//Gotten from Hng
		$password = '';
		//Initialize an errors variable to store all the errors
		$errors = '';
		if(!$name)
		{
			//if there is no name add the name error to the errors array
			$errors .= 'name: The name field is important.<br>';
		}
		if(!$email)
		{
			//if there is no email add the email error to the errors array
			$errors .= 'email: The email field is important.<br>';
		}elseif ($email && !ValidateEmail($email)) {
			//if there is an email but it doesnt match a valid email format
			$errors .= 'email: This is not a valid email.<br>';
		}
		if(!$subject)
		{
			//if there is no subject add the subject error to the errors array
			$errors .= 'subject: There subject field is required.<br>';
		}
		if(!$message || strlen($message) < 10)
		{
			//If there is no message or it is less than 10 characters long
			$errors .= 'message: Please enter your message. It should have at least 10 characters.<br>';
		}
		$hasErrors = (strlen($errors) >= 2) ? true : false; //check if the errors variable is empty
		if(!$hasErrors)
		{
			//if there are no errors send me a mail
			//make the message body 
			$body = $name . ' <br>';
			$body .= 'With email:'. $email . ' <br>';
			$body .= 'Says: '. $message;
			if($data = $connection->query('SELECT * FROM password')->fetch()) {
				//if the database was succesfully queried
				$password = $data['password']; //store the password data
				header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=". CONTACT_FORM); //send the message to the endpoint
				$showSuccess="successful";
			}else{
				$showErrors="Database error";
			}
		}else{$showErrors=$errors;}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>David Saint Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300|Quicksand:300|Roboto:400">
	<style type="text/css">
		html{height: 100%;}body{color:#616161;font-family:'Roboto',sans-serif;font-size:14px;overflow:hidden;background:url('https://res.cloudinary.com/saintswebnology/image/upload/v1504434944/bg_focli2.jpg') 0 0 no-repeat;background-size:cover;background-color:#fafafa;margin:0;height:100%;}h2{font-family:'Quicksand';font-size:4em;font-weight:100;line-height:1;}h3,h4{font-family:'Dosis'}.content{width:100%;height:100%;background-color:rgba(50,50,50,0.3);overflow-y:scroll;position:absolute;}.container{width:70%;max-width:1280px;margin:0 auto;position:relative;}.card{margin:70px auto;position:relative;min-height:auto;}.card:after{content:"";display:table;clear:both;}.curly-l{color:#f5f5f5;font-size:6em;font-style:italic;position:absolute;z-index:30;top:-50px;left:-30px;}.curly-r{color:#f5f5f5;font-size:6em;font-style:italic;position:absolute;bottom:0px;z-index:30;}.hold{position:relative;}.picture{width:40%;z-index:20;float: left;position:relative;box-sizing:border-box;box-shadow:0 16px 24px 2px rgba(0,0,0,0.14),0 6px 30px 5px rgba(0,0,0,0.12),0 8px 10px -5px rgba(0,0,0,0.3);}.logo{position:absolute;top:0;left:0;width:60%;padding:10px 20%;height:40px;z-index:25;}.link{position:absolute;bottom:0;left:0;width:100%;height:40px;padding:10px 0;z-index:25;}.button{text-decoration:none;text-transform:uppercase;color:#454545;vertical-align:middle;line-height:36px;height:36px;display:inline-block;border-radius:18px;padding:0 2rem;-webkit-tap-highlight-color:transparent;font-size:1rem;box-shadow:0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);transition:box-shadow .2s ease;overflow:hidden;}.button.black{background-color:rgba(0,0,0,0.88);color:#fff;border:1px solid #eee;}.button:hover{color:#fff;background-color:rgba(0,0,0,0.57);box-shadow:0 4px 5px 0 rgba(0,0,0,0.14),0 1px 10px 0 rgba(0,0,0,0.12),0 2px 4px -1px rgba(0,0,0,0.3);}.white{background-color:rgba(255,255,255,0.92);}img.responsive-img{max-width:100%;height:auto;}.details{width:60%;background-color:#fff;padding:20px;margin:20px 0;float: left;position:relative;height:100%;box-sizing:border-box;box-shadow:0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);}.ul li{margin:10px;list-style:none;}div.divider{height:0px;border:1px solid #eeeeee;margin:25px 0;}ol{display:inline-block;}ol li{list-style:none;float:left;margin:0 50px;}.center{text-align:center;}.contact{background-color:white;padding:20px 40px;box-shadow:0 4px 5px 0 rgba(0,0,0,0.14),0 1px 10px 0 rgba(0,0,0,0.12),0 2px 4px -1px rgba(0,0,0,0.3);}form input{width:100%;height:25px;line-height:25px;padding:7px;border:1px solid #e9e9e9;border-radius:25px;margin-bottom:20px;margin-top:10px;color:#616161;}textarea{width:100%;margin-bottom:20px;margin-top:10px;border:1px solid #e9e9e9;border-radius:25px;height:50px;padding:10px;font-family:'Roboto';}#error{color:#e57373!important;font-size:16px;font-weight:bold;}#success{color:#80cbc4;font-size:16px;}@media only screen and (max-width: 600px){.container{width:90%;}.picture{width:100%;}.details{width:100%;}}
	</style>
</head>
<body>
	<div class="content">
		<div class="container">
			<div class="card">
				<span class="curly-l">{</span>
				<div class="hold">
					<div class="picture">
						<img src="https://res.cloudinary.com/saintswebnology/image/upload/v1504434934/profile_l90frs.jpg" class="responsive-img" alt="David Saint's profile picture">
						<div class="logo">
							<img src="https://res.cloudinary.com/saintswebnology/image/upload/v1504434954/davidsaint_transparent_vktrfh.png" class="responsive-img" alt="David Saint | SaintsWebnology">
						</div>
						<div class="link center">
							<a href="https://github.com/hnginterns/getting-started-h2-2017/commit/784bb9957df20f37bfaefddea5d82fdfc4f7bb35" class="center button white">Stage 1 Commit</a>
						</div>
					</div>
					<div class="details">
						<h2>David Saint</h2>
						<p>
							Before you ask, I'm just going to tell you this right off the bat, My name is not actually David Saint.
						</p>
						<p> My real name is David Olowokere but I like the mystery. I am a software developer with skills in </p>
						<ul class="ul">
							<li>Web Development <em>(90%)</em></li>
							<li>Android App Development <em>(60%)</em></li>
							<li>Machine Learning <em>(60%)</em></li>
							<li>Data Analysis <em>(60%)</em></li>
						</ul>		
						<div class="divider"></div>
						<ol>
							<li><b>Slack:</b> @davidsaint</li>
							<li><b>GitHub:</b> DSaint109</li>
						</ol>
					</div>
				</div>
				<span class="curly-r">}</span>
			</div>
			<br><br><br>
			<div class="card">
				<span class="curly-l">{</span>
				<div class="hold">
					<div class="contact">
						<h2 class="center">Contact Me</h2>
						<div class="container">
							<p class="center">If you would like to get across to me, please send me a mail through here. All feilds are required.</p>
							<div class="form">
								<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> id="contactForm">
									<input type="text" name="name" id="name" placeholder="Enter your name" required>
									<input type="email" name="email" id="email" placeholder="example@domain.com" required>
									<input type="text" name="subject" id="subject" placeholder="Enter the subject here" required>
									<textarea name="message" id="message" placeholder="Enter your message" required></textarea>
									<button class="button black center" id="formSubmit" type="submit"> send </button>
								</form>
							</div>
							<?php
								if($showErrors){
									echo '<div id="error">'.$showErrors.'</div>';
								}
							?>
							<?php
								if ($showSuccess) {
									echo '<div id="success">'.$showSuccess.'</div>';
								}
							?>
						</div>
					</div>
				</div>
				<span class="curly-r" style="right: -20px; bottom: -50px">}</span>
			</div>
		</div>
	</div>
</body>
</html>