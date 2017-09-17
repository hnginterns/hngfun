<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$error = [];

$subject = $_POST['subject'];

$to = 'adekanmbi.yosola@gmail.com';

$body = $_POST['message'];

if($body == '' || $body == ' ') {

$error[] = 'Message box empty.';

}

if($subject == '' || $subject == ' ') {

$error[] = 'Subject Empty';

}

if(empty($error)) {

$config = include(dirname(dirname(__FILE__)).'/config.php');

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


       <title> ADEKANMBI Yosola </title>


	 <style type="text/css">

	 body {

		 margin:10px 250px ;

		 border-radius: 500px;

		 text-align: center;

		 background-color: #e0e0e0;}

.container {

padding: 0 16px;

}

		 div {

		 border-radius:0px 45px;

			padding: 20px;

			}

			

			.shadow {

box-shadow: 0 6px 10px 0;

max-width: 70%;

margin: auto;

text-align: center;

background-color: orange;

padding-bottom: 30px;

}

	 .black {

			text-align: center;

	 background-color:#00b8d4;

	 text-align: center;

	 box-shadow: 0px 10px 15px 0px;

	 }

	 .one {

	 color:red;

	 font-size:30px;

	 letter-spacing:10px;

	 font-family:arial;

	 }

	 h1 {

	 margin-bottom:-35px;

	 font-size:60px;

	 letter-spacing:30px;

	 }

	 h2{

	 font-size:40px;

	 letter-spacing:15px;

	 font-family:times new roman;

	 }

	 

	 h3{

	 font-size:20px;

	 letter-spacing:5px;

	 font-family:times new roman;

	 }

		a {

		text-decoration: none;

		margin-bottom: -10px;

		color:yellow;

		font-family: arial;

		font-size:17px;

		}

		a:hover{

		color:pink;

		}

		.three {

		font-size:25px;}

		.two {

		margin-top:-20px;

		margin-bottom:-10px;

		margin-right:30px;

		}

		img{

		border-radius:50%;

		}

		

		

	 </style>


</head>


 <body>


    <div class="black">


	 <h1>HOTELS.NG</h1> 


	 <h2>Internship.</h2>



			<img src="http://res.cloudinary.com/yosiwealth/image/upload/v1503350177/IMG_20170527_160412_lfvmwf.jpg" alt="me" width="400px" height="400px"> <br>


				 <p class="one"><b>


				 ADEKANMBI 'Yosola<br/>


					Oluwaseun.</b>


				 </p>


		 <p><Strong>


			 <a href="http://www.twitter.com/mo_yosiwealth"><i>Tweet me</i></a></Strong>


				</p>
				
				
		 <p><Strong>


			 <a href="http://www.github.com/yosiwealth"><i>Github Profile</i></a></Strong>


				</p>
				
					
		 <p><Strong>


			 <a href="http://www.slack.com/mo.yosiwealth"><i>Slack</i></a></Strong>


				</p>
				
					
		 <p><Strong>


			 <a href="https://drive.google.com/file/d/0B9U6S9S7spmUMzA5djh2OHhGMm8/view"><i>Download my contactApp</i></a></Strong>


				</p>


				<p class="three">


				A student of the department of Statistics in the Federal University of Agriculture, Abeokuta. <br/>A lover of tech with major interest in Data Science, Android and Web Design currently


				enrolled in the Android Learning Community scholarship by Andela/Google.


				</p>


	<div class="shadow">

      <h3>You Can Contact Me Here</h3>


      <?php if(isset($error) && !empty($error)): ?>

          <div style="text-align: center; padding:5px; background: #fff;">

            <ul style='list-style:none;'>

              <?php

foreach ($error as $key => $value) {

echo "<li>$value</li>";

}

?>

            </ul>

          </div>

        <?php endif; ?>


      <form method="POST" action="">

        <label for="subject">Subject</label><br>

          <input type="text" name="subject" placeholder="Subject...." style="width: 50%" required><br>


          <label for="message">Your Message</label><br>

          <textarea name="message" rows="10" cols="50" style="width: 50%" placeholder="Please Write Your Message Here...." required></textarea><br>


          <button type="submit" name="submit"> Send Me A Mail</button>

      </form>

    </div>



 </body>


</html>

