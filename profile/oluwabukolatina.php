<?php 

	$config = include('./config.php');

	$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];

	$con = new PDO($dsn, $config['username'], $config['pass']);

	$exe = $con->query('SELECT * FROM password LIMIT 1');

	$data = $exe->fetch();

	$password = $data['password'];

	if(isset($_GET['sendmessage'])) {

		$subject = "Hello";

		$password = htmlentities(strip_tags(trim($password)));

		$body = htmlentities(strip_tags(trim($_GET['body'])));

		$to = 'oluwabukolatina2015@gmail.com';

		$location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

		header("Location: " . $location);
	
	}

?> 

<!DOCTYPE html>
<html>
<head>
<title>OLUWABUKOLATINA</title>
</head>
<body>

<style>
			fieldset{width:80%;
				height:90%;
				margin:5px auto;
				border:double white;
				}
			
		legend{font-family: "AvantGarde Md BT";
				font-size:18px;
				}
			
			h1{text-align: center;
			width:80%;
			height:7%;
			margin-top:35px;
			float:right;
			margin:5px;
			text-decoration:none;
			color:#FFF;
			display: inline;}

			h2{font-family: "AvantGarde Bk BT";
			margin:5px auto;
			text-align:center;
			}

			.txt{font-family: "AvantGarde Md BT";
			width:40%;
			height:30px;
			margin:5px auto;
			text-align:center;
			}

		

			body{background-color: gray;}
		</style>

	
		

	<div>	
    
    <fieldset><legend><h2>My Profile</h2></legend>

    <h1>
    	<img src="http://i.imgur.com/GxwSbib.png" width="100"> <br>
    	Name: OLUWABUKOLA TINA <br>
    	Slack: oluwabukolatina <br>
    	bio: tech, books(crime, thriller), movies. <br>
    	<a href="https://github.com/OluwabukolaTina/hnginternship">Github Task 1</a><br>

    	CONTACT ME <br>

    	<form action="" method="GET">
    	<input type="text" placeholder="Name" name="name" class="txt"/>

    	<input type="text" placeholder="Email Address" name="email" class="txt"/>

    	<textarea placeholder="Comment" class="txt" rows="8" name="body"  cols="80"></textarea>

    	<div align="center"><button type="submit" value="Get In Touch" class="txt" name="sendmessage"> </button>
    	
    	</form>
    
    </h1>

    </fieldset>


    </div>
</body>
</html>