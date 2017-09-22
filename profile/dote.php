<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send'])) {
		include ('../config.php');
		$error = array();
		$subject = trim($_POST['subject']);
		$to = 'eul.nelson@gmail.com';
		$body = trim($_POST['body']);
		if (empty($subject)){
			array_push($error, "Subject cannot be empty");
		}
		if (empty($body)){
			array_push($error, "Message body cannot be empty");
		}
			if (empty($error)){
				$details = include_once('../config.php');
				$db = new mysqli ($details['host'], $details['username'], $details['password'], $details['dbname']);
				if ($db->connect_error){
					die('DB CONNECTION ERROR');
				}else{
					$exe = $db->query('SELECT * FROM password LIMIT 1');
					$data = $exe->fetch();
					$password = $data['password'];
					$uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
					header("location: $uri");
    
				}
				
			}
		
	}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Emmanuel Nelson - Profile</title>
    <style>
        body{
            background-color: #fafafa;
        }
        #container{
			max-width: 1080px;
            padding: 2em;
			margin-top: 2%;
            margin-bottom: 5%;
            margin-left: auto;
            margin-right: auto;
        }
        header#head{
			border-top-right-radius: 25px;
			border-top-left-radius: 25px;
            background-color: #424242;
            color: #fafafa;
            height:50px;
			padding: 1em;
			margin-bottom:5%
            }
        .content{
            background-color: #ffffff;
            color: #424242;
        }
		.orange{
			color: #bf360c;
		}
           footer#foot{
			max-width: 1080px;
            padding-top: 5%;
            margin-bottom: 5%;
            margin-left: auto;
            margin-right: auto;
            }
        img{
            border: 0;
            max-width:100%;
        }
        a{
            text-decoration: none;
            color: #1565c0;
        }
        a:hover{
            text-decoration: underline;
        }
        h1, h2, h3, h4, h5{
            color: #424242;
            font-weight: normal;
            letter-spacing: .4em;
            text-transform: lowercase;
            }
            p{
				padding: 2em;
                text-align: justify;
            }
		h1.deep, h2.deep, h3.deep, h4.deep, h5.deep{
            color: #fafafa;
			 }
		table.links{
				border: 0;
				margin-left:auto;
				margin-right: auto;
                text-align : center;
                }
        img.icons{
                width:16px;
                height: 16px;
                }
		img.dp{
			height: 320px;
			width: 240px;
			display: block;
			margin-left: auto;
			margin-right: auto;
			border-radius: 20px;
		}
		input{
			margin: 1%;
			border: none;
			border-bottom: 0.1em solid #424242
		}
		textarea{
			border:  none;
			border-bottom:  0.1em solid #424242;
			margin-left: auto;
			margin-right: auto;
			margin-top: 1%;
			margin-bottom: 1%';
		}
		form {
			display:  inline-block;
			margin-left: auto;
			margin-right: auto;
			text-align: left;
		}
		#form{
			display: block;
			text-align:  center;
		}
		#form label {
			display: block;
		}
		#form button {
			border: 0.1em solid #424242;
			padding: 0.5em;
			display: block;
			margin: 0.3em;
			-webkit-transition-duration 0.5s;
			transition-duration: 0.5s;
			
		}
		#form button:hover {
				background-color: #424242;
				color: #fafafa;
			}
	</style>
</head>
<body>
	<div id='container'>
			<header id='head'>
				<h2 class='deep' style='text-align: center;'>Emmanuel Nelson</h2>
			</header>
			<div class='content'>
			<img class='dp' src='http://imgur.com/Zq5NFKE.jpg' alt="dot.e's photo">
			<h3 style='text-align: center;'>About Me</h3>
			<p>
				I an a student at University Of Uyo. Am fascinated with the way the web works and hence interested in web technologies and the programming languages of the world wide web especially PHP (frontend) - still among the learning folks though. I hope to use the internet to help small and medium scale enterprises expand their scope of operations.       
			</p>
			<p class='orange'>
				I am proudly from Akwa Ibom State.
			</p>
			<div id='form'>
			<h3>Contact Me</h3>
			<form action='' method='post'>
				<label for='name'>Your Name:</label>	<input name='name' type='text'  placeholder='Your name here' required ><br>
				<label for='email'>Email:</label>	<input name='email' type='email' placeholder='Your email address...' required ><br>
				<label for='subject'>Subject:</label>	<input type='text' name='subject' placeholder='Subject...' required ><br>
				<label for='message'>Message:</label><br>
				<textarea name='body' placeholder='Your message here...' required ></textarea><br>
				<button type='submit' name='send'>Send >>></button>
			</form>
			</div>
			</div>
		
	</div>
		<footer id='foot'>
			<table class='links'>
				<thead>
					<td colspan='3'><h5>Find Me on:</h5>
					</thead>
				<tr>
					<td>
						<img class='icons' src="https://cdn0.iconfinder.com/data/icons/tuts/256/slack_alt.png" alt="slack" >  <a class='links' href="https://hnginterns.slack.com/team/dot.e" target="_blank">dot.e</a></td>...
								<td><img class='icons' src="https://cdn1.iconfinder.com/data/icons/logotypes/32/github-512.png" alt="github" >  <a href="https://github.com/dot-e" target="_blank">dot-e</a></td>
				_				<td>
									<img class='icons' src='https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-128.png' alt='twitter' > <a class='links' href='http://twitter.com/NLIrve' target='_blank' >NLIrve</a>
								</td>
								</tr>
								</table>
				
			</footer>


</body>
</html>
