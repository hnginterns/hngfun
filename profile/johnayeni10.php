<?php
    if (isset($_GET['sendmessage'])) {

        $config = include('../../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

        // HEAD:profile/olaoluwa_98/index.php
//         $subject = "HEY THERE";
// =======
        $subject = htmlentities(strip_tags(trim($_GET['subject'])));
// >>>>>>> 2d9503c8309e33c70fd14ca09b80d2072a86a99c:profile/olaoluwa_98/index.php
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['body'])));
        $to = "johnayeni10.aj@gmail.com";

        $location = "../../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

        header("Location: " . $location);

    }
 ?>
<!DOCTYPE html>
<html>
<head>
<style>
	body{
		background-color: #F5F5F5;
	}
	html {
        font-family: "Lucida Sans", sans-serif;
    }
	a{
		text-decoration: none;
		color: yellow;
		 -webkit-transition: color .5s, font-size .5s; /* Safari */
    	transition: color .5s, font-size .5s;
	}
	a:hover{
		color: orange;
		font-size: 130%;
	}
	 * {
        box-sizing: border-box;
    }
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    [class*="col-"] {
        float: left;
        padding: 15px;
    }

    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }

    @media only screen and (orientation: landscape) {
        [class*="col-"] {
          width: 33.33%;
      }
    }

    @media only screen and (min-width: 600px) {
        /* For tablets: */
        .col-m-1 {width: 8.33%;}
        .col-m-2 {width: 16.66%;}
        .col-m-3 {width: 25%;}
        .col-m-4 {width: 33.33%;}
        .col-m-5 {width: 41.66%;}
        .col-m-6 {width: 50%;}
        .col-m-7 {width: 58.33%;}
        .col-m-8 {width: 66.66%;}
        .col-m-9 {width: 75%;}
        .col-m-10 {width: 83.33%;}
        .col-m-11 {width: 91.66%;}
        .col-m-12 {width: 100%;}
    }

    @media only screen and (min-width: 600px) {
        /* For desktop: */
        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}
    }
     ul.social{
      padding: 0px;
    }
    ul.social li{
      list-style: none;
      display: inline-block;
      margin: 0 10px;
      text-decoration: none;
    }
    ul.social li a{
      color: white;
      font-size: 2em;
    }
    .image-container-image {
      position: relative;
      margin: 5px;
      width: 100%;
      height: 100%;
    }

    .about {
      margin: 5px;
      height: 100%;
      width: 100%;
      font-size: 1.5em;
      color: #65c5c5;
    }

    .image-container-image .image {
        width: 100%;
        backface-visibility: hidden;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 3px 3px 4px 0px rgba(0,0,0,0.24);
        -webkit-transition: all .35s ease-in-out 0.3s;
        transition: all .35s ease-in-out 0.3s;
    }

    .image-container-image:hover .image {
        -webkit-transform: translate(-10px, -10px);
        transform: translate(-10px, -10px);
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }

    textarea
    {
      color: #8b0081;
      font: normal normal bold 15px/50px arial, sans-serif;
      border: none;
      margin-top: 5%;
      border-bottom: 4px solid #8b0081;
      -webkit-transition: all .35s ease-in-out .5s;
      transition: all .35s ease-in-out .5s;
    }

    input{
        width: 80%;
        color: #8b0081;
        font: normal normal bold 15px/50px arial, sans-serif;
        border: none;
        border-bottom: 2px solid #8b0081;
        -webkit-transition: all .35s ease-in-out .5s;
        transition: all .35s ease-in-out .5s;
    }

    .contact{
      margin-top: 5%;
      padding: 10px;
      border: 1px solid #ddd;
    }

    .contact-title{
      margin: 0px;
    }

    ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #rgba(107, 156, 156, 0.5);
    opacity: 0.5;
    }
    :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }
    ::-moz-placeholder { /* Mozilla Firefox 19+ */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }
    :-ms-input-placeholder { /* Internet Explorer 10-11 */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }
    ::-ms-input-placeholder { /* Microsoft Edge */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }

    input:placeholder {

    }

    input:focus {
        width: 100%;
        border-bottom: 6px solid #8b0081;
    }

    input:invalid {
        border-left: 2px solid red;
    }

    input:valid {
        border-bottom: 1px solid green;
    }
    #header{
		margin-left: 20%;
		margin-right: 20%;
		text-align: center;
		color: white;
		background-color: #8b0081;
		font-family: sans-serif;
		font-size: 100%;
		margin-bottom: 10px;
		padding-top: 5%;
		padding-bottom: 5%;
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		 -webkit-transition: margin 2s, color 2s, background-color 2s, box-shadow 2s; /* Safari */
    	transition: margin 2s, color 2s, background-color 2s, box-shadow 2s;
	}
	.social-icons{
		color: white;
		 -webkit-transition: color 2s; /* Safari */
    	transition: color 2s;
	}
	#header:hover .social-icons{
		color: #8b0081;
	}
	#header:hover{
		margin-left: 10%;
		margin-right: 10%;
		color: #8b0081;
		background-color: white;
		box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
	}

	#info{
		background-color: #8b0081;
		padding: 2%;
		margin: 5px 20% 5px 20%;
		font-family: sans-serif;
		text-align: center;
		color: white;
		font-size: 100%;
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}
	#contactForm{
		background-color: white;
		padding: 2%;
		margin: 5px 20% 5px 20%;
		font-family: sans-serif;
		text-align: center;
		color: #8b0081;
		font-size: 100%;
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}
	.send-button {
        background-color: gold; /* Green */
        border: none;
        color: white;
        padding: 20px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transition: background-color .35s ease-in-out , box-shadow .35s ease-in-out;
        -webkit-transition: background-color .35s ease-in-out , box-shadow .35s ease-in-out;

    }
    .send-button:hover {
      background-color: yellow;
      box-shadow: 0 1px 3px rgba(0,0,0,0.12), 3px 3px 4px 0px rgba(0,0,0,0.24);
    }

    .-send-button:active {
      background-color: #1d4141;
      transform: translateY(2px);
      box-shadow: none;
    }
</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Ayeni John | HNG Intern</title>
</head>
<body>
<div id="header">
	<h1>JOHN<br>AYENI</h1>
	<ul class="social">
        <li><a href="mailto:johnayeni10aj@gmail.com" title="Message me?" target="_blank"><i class="fa fa-envelope social-icons"></i></a></li>
        <li><a href="https://twitter.com/_code_ops" title="@_code_ops" target="_blank"><i class="fa fa-twitter social-icons"></i></a></li>
        <li><a href="https://medium.com/@JohnAyeni" title="@JohnAyeni" target="_blank"><i class="fa fa-medium social-icons"></i></a></li>
        <li><a href="https://github.com/JohnAyeni" title="@JohnAyeni" target="_blank"><i class="fa fa-github social-icons"></i></a></li>
        <li><a href="https://instagram.com/yohanifejohn/" title="@yohanifejohn" target="_blank"><i class="fa fa-instagram social-icons"></i></a></li>
  </ul>
</div>

<div id="info">
	<div class="row">
		<div class="col-4">
			<div class="image-container-image">
	         <img class="image" src="http://res.cloudinary.com/yohanifejohn/image/upload/v1503573567/johnayeni10_idvjwo.jpg" alt="johnayeni10's Picture">
	      	</div>	
		</div>
		<div class="col-8">
			<h3><span><i class="fa fa-terminal"></i></span>  Name : <small>John Ayeni</small></h3>
			<h3><span><i class="fa fa-github"></i></span>  GitHub : <small>JohnAyeni</small></h3>
			<h3><span><i class="fa fa-slack"></i></span>  Slack : <small>johnayeni10</small></h3>
			<p>My name is Ayeni John. I am a 300 level computer science student of Covenant University. I want to become a <span><i class="fa fa-gamepad"></i></span> game developer. </p>
			<small><a href="https://github.com/JohnAyeni/HNG_intern_test"><h3>Click here to see my solution for the #stage1 test</h3></a></small>
		</div>
		
	</div>
</div>

<div id="contactForm">
	<form class="contact" action="http://hng.fun/profile/johnayeni10/index.php" method="get">
            <h1 class="contact-title">Mail me!</h1>
            <input type="text" name="subject" placeholder="subject" required>
            <textarea rows="3" cols="60" name="body" placeholder="type your message in here ....." required></textarea><br>
            <button type="submit" name="sendmessage" class="send-button"><span><i class="fa fa-send"></i></span> SEND</button>
    </form>
</div>
</body>
</html>