<?php

    try{
    $connect_details = include('../config.php');
    $connection = 'mysql:host='.$config['host'].';dbname = '.$config['dbname'];
    $connect = new PDO ($connection,$config['username'],$config['pass']);
    }catch (Exception $e){
    echo "Unable to connect";
    echo $e->getMessage();
    die();
}

if(isset($_POST['submit'])){
    
    $subject = $_POST['subject'];
    $to = 'xyluz@ymail.com';
    $body = $_POST['message'];
    
    $sql = 'SELECT * FROM password';
    $datab = $connect->query($sql)->fetch();
    $password = $datab['password'];

    $link = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
    
    header("location: $link");

}
?>
<!DOCTYPE html>
<html id="full_page">
<head>
	<title>Profile Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    #full_page{
	background-color: black;
}
.mainsection
{
	height: 1250px;
	width: auto;
    background-color: lightgray;
    border: 2px solid;
    margin: 15em;
    margin-top: 2em;
}
.mainsection p
{
	font-style: bold;
	font-family: "Great Vibes" cursive,sans-serif;
	font-size:20px;
	font-weight: normal;
	color: black;
	border: 1px;
	padding:50px 50px;
	text-align: justify;
}
.mainsection h1
{
	line-height: 0px;
	color:black;
	font-family: monospace;
	font-size:30px;
	font-style: italic;
}
#p_mainsection
{
	font-family:"Great Vibes", cursive;
	font-size:40px;
	line-height: 2px;
	font-weight: normal;
	text-shadow: 0 1px 1px #fff;
	text-align: center;
	color:black;
}
#img_size
{
	width:300px;
	height:500px;
	transform: rotate(360deg);
	display:block;
	margin:auto;
	padding:0em;
}
#firstsection
{
	height:50px;
	width:auto;
	text-align: center;
}

.link{
	
    padding-top: 20px;
    margin-left: 300px;
	height:100px;
    width: auto;
	text-align: center;
}

a {
	margin-top: 2em;
	width: auto;
	text-align: center;
	text-decoration: none;
}
a:visited{
	color:green;
}

a:hover{
	color:pink;
}

.img_container{
    float: left;
    margin-top: 0px;
}
#slack_img{
    margin-left:350px;
    border-radius: 25px;
}
#twit_img{
    margin-left: 60px;
    border-radius: 25px;
}
.social_media {
    text-align: center;
    padding-top: 2em;
    font-size: 30px;
}

    </style>
<body>
    <nav class="side_bar">
        <form action="#" method="post">
            <fieldset>
                <label>Contact Form:</label><br>
                <label>First Name</label>
                <input type="text" name="fname" class="fulllength"><br>
                <label>Last Name</label>
                <input type="text" name="lname" class="fulllength"><br>
                <label>Subject</label>
                <input type="text" name="subject" class="fulllength"><br>
                <label>Message</label>
                <input type="text" name="message" class="fulllength_1">
                <input type="submit" name="email">
            </fieldset>
        </form>
    </nav>
    <div class="mainsection">
        <h1> Hello, World!</h1>
        <p id="p_mainsection">Nwadike Chikezie</p>
        <img src="http://res.cloudinary.com/chykrinks/image/upload/v1504443343/hngfuninterns/slack-profile-picture_udeiql.jpg" id="img_size" alt="slack_profile_picture">
        <p id="firstsection">
            I am an Embedded Systems designer, and a Web developer who specializes in back end development frameworks like Laravel, Django and Expressjs and I am currently based in Ibadan (but I can be anywhere in the world if the world is being attacked by Aliens). I am strongly interested in Artificial Intelligence and Machine Learning (this stems from my love for embedded systems) and I build and design Robots for fun.
            <br />When I am not disturbing my laptop with codes or dissecting through for a bug, you would catch me reading a book or playing chess or watching a movie(usually scifi), and sometimes sleeping. I love to  teach and so on weekends, I teach students of the University of Ibadan robotics and general programming.<br>
        </p><br>
        <div class="link">
            <p><a href="https://github.com/Chikezie122/hngtasks">HotelsNG Stage 1 Task</a></p>
        </div>
        <div class="social_media">
            <span>Follow me on social media through:</span>
        </div>
        <div class="img_container">
            <a href="https://hnginterns.slack.com/emekys3"><img src="http://res.cloudinary.com/chykrinks/image/upload/v1504443342/hngfuninterns/slack-download_jdn6yi.jpg" width="50" height="50" id="slack_img" alt="slack handle"></a>
        </div>
        <div class="img_container">
            <a href="https://twitter.com/chykrinks"><img src="http://res.cloudinary.com/chykrinks/image/upload/v1504443342/hngfuninterns/twitter-download_haat2b.jpg" width="50" height="50" id="twit_img" alt="twitter handle"></a>
        </div>
    </div>
</body>
</html>