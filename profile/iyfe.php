<?php
    $admin_email = "xyluz@ymail.com";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = ""; 
    $successMessage = "";
    $to  = 'icukachuk@gmail.com';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST["email"];
    $name = $_POST['name'];

    if (!$email) {

        $error .= "An email address is required.<br>";
    }
    if (!$message) {
        $error .= "The content field is required.<br>";
    }
    if (!$subject) {
        $error .= "The subject is required.<br>";
    }
    if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid.<br>";
    }
    if ($error != "") {
        $error = '<p>There were error(s) in your form:</p>' . $error;
    }else{

	    if(empty($error)) {
	      $config = include('../config.php');
	      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	      $con = new PDO($dsn, $config['username'], $config['pass']);
	      $exe = $con->query('SELECT * FROM password LIMIT 1');
	      $data = $exe->fetch();
	      $password = $data['password'];
	      $message = urlencode($message);
	      header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to");
	    }
	}
  }else {
            // enter mail subject and message to send mail
            echo " ";
        }
 ?>

 <!DOCTYPE html>

<html>
<head>
	<title> Ifunanya's Profile</title>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<style type="text/css">
		
            #dp{

                border-radius: 50%;
                width:40%;
                padding: 40px;
                margin: auto;
              
            }
            #container {
            	margin : auto;
            	height: 400px;
              	width: 400px;
              	background: #ddd;
              	font-family: 'Slabo 27px', serif;
            }
            #container_2 {
            text-align: center;
            }

            .left-half {
              position: absolute;
              left: 0px;
              width: 50%;

            }
            p{
              margin:auto;
              padding: 10px;
            }
            .right-half {
              position: absolute;
              right: 0px;
              width: 50%;
            }

            h2 {
              text-transform: uppercase;
              color: ddd;
              font-weight: 400;
              letter-spacing: 1px;
              font-size: 1.4em;
              line-height: 2.8em;
            }
            .form_container {
              margin: 0;
            }


            .login-box {
              background-color: ddd;
              max-width: 340px;
              margin: 0 auto;
              position: relative;
              top: 80px;
              padding-bottom: 30px;
              border-radius: 5px;
              box-shadow: 0 5px 50px rgba(0,0,0,0.4);
              text-align: center;
            }

            .login-box .box-header {
              background-color: #665851;
              margin-top: 0;
              border-radius: 5px 5px 0 0;
            }

            .login-box label {
              font-weight: 700;
              font-size: .8em;
              color: #888;
              letter-spacing: 1px;
              text-transform: uppercase;
              line-height: 2em;
            }

            .login-box input {
              margin-bottom: 20px;
              padding: 8px;
              border: 1px solid #ccc;
              border-radius: 2px;
              font-size: .9em;
              color: #888;
            }

            .login-box input:focus {
              outline: none;
              border-color: #665851;
              transition: 0.5s;
              color: #665851;
            }
            textarea {
                width: 70%;
                height: 150px;
                padding: 12px 20px;
                border: 1px solid #ccc;
                border-radius: 2px;
                resize: none;
            }

            button {
              margin-top: 0px;
              border: 0;
              border-radius: 2px;
              color: white;
              padding: 10px;
              text-transform: uppercase;
              font-weight: 400;
              font-size: 0.7em;
              letter-spacing: 1px;
              background-color: #665851;
              cursor:pointer;
              outline: none;
            }

            .login-box button:hover {
              opacity: 0.7;
              transition: 0.5s;
            }

            .login-box button:hover {
              opacity: 0.7;
              transition: 0.5s;
            }
	</style>
</head>
<body id = "container">
	<div id = "container_2">
		<h1>Ifunanya's Profile</h1>
		<div class="left-half">
				<img id = "dp" alt="Display Picture" src="http://res.cloudinary.com/aiyfee/image/upload/v1504296213/iyfe_oaiswp.png">
				<p> Hello, my name is Ifunanya Ukachukwu. I am learning to become a software developer. Before now, my focus has been on HTML, CSS and JavaScript. I am really excited about this internship.  If you like to connect please say hi.

				</p>
				<p>Catch me on Slack : 	<a href="https://hnginterns.slack.com/team/iyfe"> @iyfe</a> </p>
				<p> My first task : <a href="https://github.com/iyfe/HNGInternship/blob/master/helloworld.php" class="button">Stage#1</a></p>
        <p> Download My contact App: <a href="https://drive.google.com/drive/folders/0B4e4ri7wvyyAbVhOMDRBYmNjNUE?usp=sharing" class="button">Download App</a></p>

		</div>
		<div class="right-half">
			<div class="form_container">
				<div class="login-box animated fadeInUp">
					<form method="POST" >
						<div class="box-header">
						<h2>Contact Form</h2>
						</div>
						<label for="name">Full Name</label>
						<br/>
						<input type="email" id="fullname" name = "name" placeholder="Ada John">
						<br/>
						<label for="email">Email</label>
						<br/>
						<input type="email" id="email" name = "email" placeholder=" ada@john.co">
						<br/>
						<label for="subject">Subject</label>
						<br/>
						<input type="text" id="subject" name = "subject" placeholder="Hello">
						<br/>
						<label for="message">Message</label>
						<br/>
						<textarea id="message" rows="4" cols="50" name="message" placeholder ="Enter text here..."></textarea>
						<button type="submit">Send Message</button>						
					</form>		
				</div>
			</div>
		</div>
</div>

</body>

</html>