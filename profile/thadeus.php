<?php

	$config = include('../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);

    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];

    if (isset($_GET['submit'])) {

        $subject = "Hello";
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['message'])));
        $to = "ainojie@gmail.com";

        if (!isset($body) || $body == '' || (!isset($_GET['email'])) || $_GET['message'] == '' ) {

            echo "Form cannot be blank";

        }else {

            $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

            header("Location: " . $location);


        }


    }
	

?>

<!DOCTYPE html>
<html>

	<head>
		<title>My Profile</title>
		
		<style>
		
		.center {
			text-align: center;
			padding: 20px;
		}

		.detail_wrap {
			margin: 0px 100px 0px 100px;
		}

		img {
			border-radius: 50% ;
		}

		.link_margin {
			padding: 10px 50px 10px 50px;
		}

		.top_margin {
			margin-top: 20px;
		}

		.pad_form {
			border: 2px solid black;
		}
		
		</style>
		
	</head>

	<body class="">

		<a href="#contact"><h3>Contact</h3></a>

		<div class="center">

			<img src="profile.jpg" alt="Profile Image" />

			<h1>Thadeus Adetola Ajayi</h1>
			<h2><b>Associate Android Developer (Google Certified) &nbsp <b>|</b> &nbsp Web Developer<br></b></h2>

			<p><h3><i>Creative and entrepreneurial software technologist.</i></h3></p>
			<p class="detail_wrap">
			Soft background in the arts,
			Law diploma and a 
			Bachelors in Social Sciences.
			I have a great knack and intuition towards IT and IT related fields. This have sponsored a vocational and hands on knowledge in Computer maintenance and repairs, Web programming and development, Ecommerce management and a furtherance in the seeking of knowledge.
			</p>


			<div class="top_margin">

				<a class="link_margin" href="https://github.com/ThadeusAjayi"><img src="" alt=""/>GitHub</a>
				<a class="link_margin" href="https://twitter.com/ShopSpreeNg"><img src="" alt=""/>Twitter</a>
				<a class="link_margin" href="https://github.com/ThadeusAjayi/stage1/blob/master/thadeus.php"><img src="" alt=""/>Stage 1 Project</a>
				<a class="link_margin" href="http://bcert.me/suljnaca"><img src="" alt=""/>Certification Link</a>
				<a class="link_margin" href="https://hnginterns.slack.com/team/ainojie"><img src="" alt=""/>Slack</a>

			</div>

		</div>


		<h2 class="center">Contact Form</h2>
		<div id="contact" class="top_margin pad_form detail_wrap center">

			<form class="" action="" method="get">

				<label class="top_margin" for="email">Email :</label>
				<input type="textbox" name="email" /><br>

				<label>Message : &nbsp &nbsp &nbsp </label>
				<textarea class="top_margin" name="message" rows="10" cols="30">
				
				</textarea><br>

				<input class="top_margin" type="submit" name="submit" style="margin-left: 250px"/>

			</form>



		</div>



	</body>


</html>