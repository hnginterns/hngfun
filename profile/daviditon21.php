<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['ftopic'];
    $to  = 'andikangabriel@gmail.com';
    $body = $_POST['fmsg'];
    if($body == '' || $body == ' ') {
        $error[] = 'You have to TYPE in something to tell me something';
    }

    if($subject == '' || $subject == ' ') {
        $error[] = 'Your name and email are very important, TYPE them in';
    }
    if(empty($error)) {
        $config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
        header("location: $uri");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>David Iton | My Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<style type="text/css">
		*, *:after, *:before {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			 -o-transition: all .3s ease;
			 -ms-transition: all .3s ease;
			 -moz-transition: all .3s ease;
			 -webkit-transition: all .3s ease;
			transition: all .3s ease;
		}
		* {
			margin: 0;
			padding: 0;
		}
		html, body {
			height: 100%;
		}
		img {
			width: 100%;
			max-width: 100%;
		}
		fieldset, img {
			border: 0;
		}
		body {
			background-color: #fff;
			font: 16px sans-serif;
		}
		a {
			outline: 0;
			text-decoration: none;
			color: blue;
		}
		a:hover {
			color: #444;
			text-decoration: underline;
		}
		.container {
			margin: 0px auto;
		}

		header #name {
			text-transform: capitalize;
			text-align: center;
			background-color: cyan;
			font-weight: bold;
			padding: 10px 15px;
			margin-top: 20px;
			border-top-right-radius: 20px;
			border-bottom-left-radius: 20px;
		}
		.profile-image {
			position: relative;
			width: 300px;
			margin: auto;
		}
		.profile-image img {
			width: 300px;
			border-radius: 10px;
		}
		.profile-bio {
			margin-top: 30px;
		}
		#title {
			text-align: center;
			text-transform: capitalize;
			font-size: 25px;
		}
		.profile-bio article {
			margin-top: 20px;
			font-size: 17px;
			text-align: center;
			line-height: 23px;
		}
		.contact-form {
			margin-top: 20px;
			padding: 0 20px 10px
		}
		.contact-form input {
			padding: 4px;
			font-size: 17px;
		}
		.form-input label {
			font-size: 17px;
			text-transform: uppercase;
		}
		.label, .bin {
			margin-top: 5px;
			display: block;
		}
		.form-input {
			margin-bottom: 20px;
		}
		.bin input{
			width: 100%;
		}
		textarea {
			resize: none;
			vertical-align: top;
			height: 100px;
			width: 100%;
			padding: 10px;
			font-size: 17px;
		}
		footer {
			text-align: center;
			margin-top: -10px;
		}
		footer ul img {
			width: 20px;
			vertical-align: middle;
			margin-left: 10px;
			margin-right: 5px;
		}
		footer ul li:first-child img {
			margin-left: 0
		}
		footer li {
			display: inline-table;
			margin-bottom: 10px;
		}
		.form-input input[type="submit"] {
		    background-color: #f4f4f4;
		    padding: 7px;
		    display: inline-block;
		    cursor: pointer;
		    background-color: rgba(99,50,0,.75);
		    color: #fff;
		    width: auto;
		    border-radius: 5px;
		    border: 0;
		}

		@media (min-width: 700px) {
			.container {
				max-width: 600px;
			}
			header #name {
				margin-bottom: -20px;
				position: relative;
			}
			.profile-body {
				box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.75);
				padding-top: 20px
			}
			article {
				padding: 10px;
			}
			.label, .bin {
				display: inline-block;
			}
			.bin {
				margin-left: 40px;
			}
			.txtaea .bin {
				margin-left: 10px;
				vertical-align: top
			}
			.bin.subject {
				margin-left: 15px;
			}
			textarea, .bin input {
				width: 450px;
			}
			footer {
				margin-top: 20px;
			}
			.form-input input[type="submit"] {
				margin-left: 100px;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<!-- header -->
		<header>
			<div id="name">meet david iton</div>
		</header>
		<!-- profile body -->
		<div class="profile-body">
			<!-- profile-picture -->
			<div class="profile-image">
				<img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/13417643_2049155135309853_6948876444453826184_n.jpg?_nc_eui2=v1%3AAeEpJYZpNNxEQgXL3Eyg7JpU5SCTgCA4RDuSitTU7iIR7bholbniBMFgUXPvlYlBQ3waHgnhWEI7PhF1eCQIWq_rG7LmdmraycdpL3GgOnXdcw&oh=228dadc190785327b031c3816a85f5a0&oe=5A5A55CC" alt="My Profile Picture" />
			</div>
			<!-- about me -->
			<div class="profile-bio">
				<h1 id="title">about me</h1>
				<article>
					Hey! I'm David Iton. Coding has changed my world.
					Learning to code gave me problem-solving skills
					and cognitive high thinking
					I can also develop websites and use my coding skills to get a better job.
					I love coding!!!
					I am from Ibesikpo Asutan L.G.A Uyo,Akwa ibom state.
				</article>
			</div>
			<!-- contact form -->
			<div class="contact-form">
				<form action="#" method="post">
					<div class="form-input">
						<div class="label"><label for="fname">Name</label></div>
						<div class="bin">
							<input type="text" name="fname" id="fname" placeholder="Your Full Name" />
						</div>
					</div>
					<div class="form-input">
						<div class="label"><label for="fmail">Email</label></div>
						<div class="bin">
							<input type="email" name="fmail" id="fmal" placeholder="Your Email Address" />
						</div>
					</div>
					<div class="form-input">
						<div class="label"><label for="ftopic">Subject</label></div>
						<div class="bin subject">
							<input type="text" name="ftopic" id="ftopic" placeholder="Topic" />
						</div>
					</div>
					<div class="form-input txtaea">
						<div class="label"><label for="fmsg">Message</label></div>
						<div class="bin">
							<textarea name="fmsg" id="fmsg" placeholder="Your Message"></textarea>
						</div>
					</div>
					<div class="form-input">
						<input type="submit" value="Send Message" />
					</div>
				</form>
			</div>
		</div>
		<!-- footer -->
		<footer>
			<ul>
				<li><span><img src="https://cdn0.iconfinder.com/data/icons/tuts/256/slack_alt.png" alt="slack" /></span><a href="https://hnginterns.slack.com/team/daviditon21" target="_blank">@daviditon21</a></li>
				<li><span><img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/github-512.png" alt="github" /></span><a href="https://github.com/daviditon21" target="_blank">@daviditon21</a></li>
				<li><span><img src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/whatsapp-512.png" alt="whatsapp" /></span><a href="tel:08022525056">08022525056</a></li>
			</ul>			
		</footer>
	</div>
</body>
</html>