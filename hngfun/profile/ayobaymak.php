
<?php
if (isset($_REQUEST['submit'])){

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $subject = $_GET['subject'];
        $body = $_GET['message'];
        $to = 'ayobaymak@gmail.com';




        $config = include('../../config.php');
        $server = $config['host'];
        $con = mysqli_connect($server,$config['username'],$config['pass'],$config['dbname']);

        if (!$con) {
            die("Connection failed: ".mysqli_connect_error());
        }

        $sql = 'SELECT * FROM password LIMIT 1';

        if($result = mysqli_query($con, $sql)) {
            $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $password = $data['password'];
        } else {
            $password = "#";
        }


        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

        header("location: $uri");

        /*$config = include (dirname(dirname(dirname(__FILE__))).'/config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $exe = $con->query('SELECT * FROM password LIMIT 1');
$data = $exe->fetch();
$password = $data['password'];

$uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

header("location: $uri");*/
}
else{
echo "Please fill all fields!!!";
}
}

?>



<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Profile</title>

	<style rel="stylesheet" type="text/css">
		body{
			padding: 0px;
			width: 100%;
			height: 100%;
			margin: auto;
			font-family: pristina;
		}


		#header{
			width: 100%;
			height: 120px;
			background: black;
			text-align: center;
		}

		#wrapper{
			width: 700px;
			height: auto;
			margin: 0px auto;
			padding: 20px;
			border-radius: 5px;
		}

		#main{
			height: 300px;

		}

		#footer{
			height: 40px;
			border-top: 1px solid gray;
			text-align: center;
			font-size: 25px;
			font-family: pristina, serif;
		}

		#wrapper #main img{
			width: 480px;
			height: 300px;
			border: 1px solid gray;
			border-radius: 8px;
			align-content: center;
		}

		#header #nav{
			margin-top: -50px;
			margin-left: 350px;
		}

		#header #nav ul li{
			list-style-type: none;
			display: inline;
			padding: 3px 8px 3px 8px;
			background-color: #00ad3f;
			font-size: 21px;
			font-family: pristina;
		}

		#header #nav a{
			text-decoration: none;
			color: greenyellow;
		}

		#header #nav ul li a:link{
			color: greenyellow;
		}

		#header #nav ul li a:visited{
			color: green;
		}

		#header #nav ul li a:hover{
			color: white;
		}

		#header #nav ul li a:active{
			color: darkolivegreen;
		}



		#header #logo img{
			margin-top: 20px;
			margin-left: -350px;
		}

		#wrapper #table1{
			width: 700px;
			height: 250px;
			table-layout: fixed;
		}

		#wrapper #table1 td{
			background: #D8D8D8;
			font-size: 14px;
			padding: 10px;
			border-radius: 10px;
			-moz-border-radius: 10px;
			-webkit-radius: 10px;
			box-shadow: 0px 0px 10px #000;
			-moz-box-shadow: 0px 0px 10px #000;
			-webkit-box-shadow: 0px 0px 10px #000;
		}

		#wrapper #table1 td h3{
			text-align: center;
			font-family: pristina;
			font-size: 20px;
		}

		input[type=text],select{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		textarea{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		label{
			width: 100%;
			margin: 8px 0;
			display: inline-block;
			border: 1px;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit]{
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover{
			background-color: #45a049;
		}

	</style>
</head>

<body>
	<div id="header">

		<div id="nav">
			<ul>
				<li><a href="index.html">Home</a></li>
			</ul>
		</div>

	</div>



	<div id="wrapper">
		<div id="main"><img src="http://www.filetolink.com/3f4dc237fa"></div>

		<h1>My Personal Profile</h1>

		<table id="table1" cellspacing="0">
			<tr>
				<td>
					<p><h3>My name is Ayodeji Bayo-Makinde, a graduate of  Bsc. Information Technology from Valley View University Accra Ghana. I'm very fluent in php and the Laravel framework. I also have little experience with mobile application development(android), Java, C# and Database management systems (Oracle). I'm a very fast learner and I work well in teams. You can find the link to my stage 1 repository  <a href="https://github.com/ayobaymak/hng-interns">here.</a> You can also download an android version of my profile <a href="https://drive.google.com/open?id=0B1IWxAslYrDCSTFDdlM1WVNhb00">here.</a>
 					</h3></p>

				</td>
			</tr>
		</table>

		<br />

		<h1>Contact Me</h1>

		<br />

		<form method="get" action="">
			<label for="subject">Subject:</label> <input type="text" id="subject" name="subject" maxlength="50" placeholder="Your subject" required/>
			<label for="message">Message:</label><textarea id="message" name="message" placeholder="Your message" required></textarea>


			<input type="submit" name="submit" value="send" />

		</form>

		<br />

		
		<div id="footer"><br />ayobaymak,Hng-Interns 2017.</div>


	</div>

</body>


</html>