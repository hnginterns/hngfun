<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to = $_POST['to'];
    $body = $_POST['message'];
    if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mofope Ojosh | Profile</title>
        <meta name="description" content="Mofope Ojosh is a Web Developer">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>    
    <body>
        
        <section class="panel">
            <div class="container">
                <div class="profile">
                    <!-- <div class="img" style="background-img: url(https://raw.githubusercontent.com/MofopeOjosh/hngintern-1/master/mofopeojosh.jpg);">  -->
                    <div class="img"></div>
                    <article class="info">
                        <center>Hi, my name is Mofope Ojosh. </center>
                        <div class="title">School</div>
                            I am a student of the University of Ibadan where I study Computer Science.
                        <div class="title">Career</div>
                            I am a web developer. I develop front-end and back-end projects. 
                            I work with HTML, CSS, JS, Vue.js (front-end) and PHP/Laravel (back-end).
                            I'm getting familiar with Python and GO.
                            <br class="hide">Slack: @mofope_ojosh
                        <div class="title">Interests</div>
                            I love to read, I love art, I love simplicity. 
                        <br><br>
                        <a class="button" href="http://github.com/mofopeojosh/hngintern-1">Stage 1</a>
                        
                    </article>
                </div>
                <div class="contact-form">
                    <form action="" method="POST">
                    <h2 style="color: #adc5d4;">CONTACT ME</h2>
                    <ul class="socials">
                        <li><a href="http://github.com/mofopeojosh"><i class="fa fa-github"></i></a></li>
                        <li><a href="http://twitter.com/mofope_ojosh"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://mofopeojosh"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <div class="title">Subject</div>
                    <input class="form-field" type="text" name="subject" placeholder="Hi Mofope">
                    <div class="title">To</div>
                    <input class="form-field" type="email" disabled name="to" value="mofopet@gmail.com" >
                    <div class="title">Message</div>
                    <textarea class="form-field" placeholder="Ask me anything" name="message"></textarea>
                    <br>
                    <button type="submit" class="button" style="float: right; margin-right: -20px;">Send Mail</button>
                    </form>
                    
                </div>
            </div>
        </section>
</body>
</html>
