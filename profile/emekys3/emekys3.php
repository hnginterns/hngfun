<?php

    try{
    $connect_details = include(dirname(dirname(dirname(_FILE_)))/.'config.php');
    $connection = new PDO('mysql:host='.$config['host'].';dbname = '.$config['dbname'],$config['username'],$config['pass']);

    $
    } catch (Exception $e){
    echo "Unable to connect";
    echo $e->getMessage();
    die();
}

if(isset($_POST['submit'])){
    
    $subject = $_POST['subject'];
    $to = 'xyluz@ymail.com';
    $body = $_POST['message'];
    
    $sql = 'SELECT * FROM password';
    $datab = $connection->query($sql)->fetch();
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
	<link rel="stylesheet" type="text/css" href="css/my_css.css">
</head>
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
        <img src="images/slack-profile-picture.jpg" id="img_size" alt="slack_profile_picture">
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
            <a href="https://hnginterns.slack.com/emekys3"><img src="images/slack-download.jpg" width="50" height="50" id="slack_img" alt="slack handle"></a>
        </div>
        <div class="img_container">
            <a href="https://twitter.com/chykrinks"><img src="images/twitter-download.jpg" width="50" height="50" id="twit_img" alt="twitter handle"></a>
        </div>
    </div>
</body>
</html>