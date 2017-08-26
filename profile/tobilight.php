<?php
if(isset($_POST['submit'])) {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'jgetitdonefast@gmail.com';
    $body = $_POST['body'];

    if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
    }


    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
    }

    if(empty($error)) {

        $config = include __DIR__ . "/../config.php";
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

        $uri = "../../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

        header("location: $uri");

    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agunloye Oluwatobiloba Light</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">


	<style>
		
		body {
	background: linear-gradient(48.84deg, #050404 -6.14%, #050404 -6.13%, #2c2019 10.79%, #ed6a19 53.16%, #000000 88.93%, #050404 111.64%);
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	font-family: "Maven Pro", sans-serif;
	font-weight: 400;
}
.container {
	max-width: 90%;
	margin:15px auto;
	text-align: center;
	-moz-box-sizing: border-box;
    -o-box-sizing:border-box;
	box-sizing:	border-box;	
	box-shadow: 0 3px 3px rgba(50,50,93,0.1), 0 15px 15px rgba(0,0,0,0.7);
	background-color: rgb(249, 249, 249);
    }
main {
	padding: 20px 10px;
}

h1, h2, h3, h4, h5, h6, ul {
	margin: 0;
	padding: 0;
}

.profile-page {
	position: relative;
	
}

.git {
	display: inline-block;
    background: #050404;
    padding: 3px 5px;
    border-radius: 16px;
    letter-spacing: 1px;
}

.git a {
	text-decoration: none;
    color: #fff;
    font-size: 17px;
}
.icon {
	height: 20px;
    margin-right: 10px;
    position: relative;
    top: 0;
}

.about h4 a {
	background: #fff ;
	color: #5387CB;
	padding: 12px 
}

.about h2 {
	margin-top: 10px;
	color: #050404;
	text-decoration: underline;
}

.about p {
	color: #050404;
	letter-spacing: 2px;
	font-weight: bolder;
}

.profile-img {
	margin-bottom: 20px;
	padding-top: 15px;
}
.profilename,.profileslack {
	
	color: #050404;
	margin-bottom: 15px;
}

.navbar {
	list-style: none;
	display: inline-block;
	margin: 5px auto;
	
}

.navbar__item {
	float: left;
}

.navbar__item__link {
	display: block;
	padding: 20px 15px;
	text-decoration: none;
	color: black;
	font-size: 18px;
}
.navbar__item__link:focus,
.navbar__item__link:hover {
	transform: translateY(-1px);
}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #050404;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: green;
}

.container3 {
	background-color: rgba(193, 193, 193, 0.54);
    padding: 20px;
    width: 450px;
    text-align: center;
    position: relative;
    margin: 64px auto;
    border-radius: 45px;
	max-width:400px;
	width:100%;
}

.container4 {
	background-color: white;
    padding: 20px;
    width: 130px;
    text-align: center;
    position: relative;
    margin: 15px auto;
    border-radius: 5px;
	padding: 15px 20px;
	}
	
	.about {
	padding-top: 45px;
	}
labsel {
font-weight: bolder;
}
 hr {
 margin-top: -5px;
 }


@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);




#contact input[type="text"], #contact input[type="email"], #contact input[type="subject"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:20px 0;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="subject"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="subject"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}


	</style>
</head>
<body>
<!-- start container -->
	<main class="profile-page">
		<div class="container">
			<div class="profile-img">
				<img src="http://res.cloudinary.com/tobilight/image/upload/v1503321342/IMAG0082_fuubsp.jpg" alt="Agunloye Oluwatobiloba Light" height="300px" style="border-radius: 10px;">
			</div>

			<section class="profile-content">
					<div class="profilename">
						<h3>Agunloye Oluwatobiloba Light</h3>
					</div>
					<div class="profileslack">
						<h4><i class="fa fa-slack"></i> Slack: @tobilight</h4>
						<h4><i class="fa fa-github"></i> Github: TobiLight</h4>
					</div>

					<div class="git">
						<a href="https://github.com/TobiLight/HNGTEST1" target="_blank">
							<i class="fa fa-github icon"></i>
							<span class="">Stage1 Task</span>
						</a>
						
					</div>

					<div class="about">
						<h2>About Me</h2>
						<p>My Name is Agunloye Oluwatobiloba Light. A graduate of Computer Science, North American University, Benin Republic. I have designed/developed quite a number of sites. I code in HTML,CSS, and JS. If am not with my laptop, I am either playing video games, tweeting, meditating, hanging out or sleeping. You can check my portfolio page &gt; <a href="http://tobilite.com.ng/portfolio" style="color: black;">here</a></p>
					</div>
			</section>
			<ul class="navbar">
				<li class="navbar__item">
	                <a href="https://github.com/TobiLight" target="_blank" class="navbar__item__link"><i class="fa fa-github"></i></a>
	            </li>
	            <li class="navbar__item">
	                <a href="mailto:jgetitdonefast@gmail.com" target="_blank" class="navbar__item__link"><i class="fa fa-envelope"></i></a>
	            </li>
	            <li class="navbar__item">
	                <a href="https://twitter.com/IamNotJustOk" target="_blank" class="navbar__item__link"><i class="fa fa-twitter"></i></a>
	            </li>
	        </ul>
			<br>
			<hr />
			 <!-- start contact form -->
		
  <form id="contact" action="hng.fun/sendmail.php" method="GET">
    <h3>Quick Contact</h3>
    <h4>Contact me today, and get a reply within 24 hours!</h4>
    <fieldset>
	<input placeholder="Your Name" class="label" name="yourname" type="text"/>
	</fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="email" type="email"  required="">
    </fieldset>
    <fieldset>
      <input placeholder="Subject" for="subject" id="subject" name="subject" type="subject"  required="">
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...."for="body" id="body" name="body" required=""></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>


<!-- end contact form -->

  
</div>
				
		</div> 
		
	</main>
<!-- end container -->


</body>
</html>
