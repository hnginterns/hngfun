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
        <style>
        body{
            background-color: #001b2a;
            /* padding: 50px 0;  */
            font-size: 15px;
            color: #333333;
            margin: 0;
            padding: 40px 0;
        }
        .panel{
            margin: auto;
            padding: 10px;
            width: 70%; 
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0px 1px 1px 0px #1a1a1a;
        }
        .panel .container{
            display: inline-flex; 
        }
        .panel .profile{
            padding: 10px;
            margin-top: 20px;
            width: 57%;
            border-right: 1px solid #e6e6e6;
        }
        .panel .profile .img{
            /* margin-top: 15px;
            width: 25%; 
            padding-right: 20px;  */
            margin:auto;
            height: 160px;
            width: 150px;
            background-image: url(https://raw.githubusercontent.com/MofopeOjosh/hngintern-1/master/mofopeojosh.jpg);
            border-radius: 4px;
            border: 3px solid #adc5d4;
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center center;
        }
        .panel .info{
            padding: 15px;
        }
        .panel .title{
            margin: 8px 0;
            color: #adc5d4;
        }
        .panel .button{
            border: none;
            border-radius: 4px;
            box-shadow: 0px 0px 1px #000000;
            font-size: 15px;
            background-color: #001b2a;
            text-decoration: none;
            color: #adc5d4;
            opacity: 0.8;
            padding: 6px;
        }
        .panel .button:hover{
            opacity: 0.7;
        }
        .panel .contact-form{
            padding-top: 10px;
            display: block;
            width: 43%; 
        }
        .panel .contact-form form{
            margin: auto;
            width: 80%;
        }
        .panel .contact-form form .socials{
            font-size: 40px;
            list-style-type: none; 
            display: inline-flex;
        }
        .panel .contact-form form .socials .fa{
            color: #001b2a;
            padding-left: 20px;
            padding-right: 20px;
        }
            .panel .contact-form .form-field{
            font-family: inherit;
            font-size: 12px;
            margin: auto;
            width: 100%; 
            border: none;
            border-radius: 2px;
            padding: 10px;   
            margin-bottom: 10px;
            background-color: #efefef;
        }
        @media (max-width: 900px){
            .panel{
                width: 90%;    
            }
            .panel .container{
                display: inline-block;
            }
            .panel .profile, .panel .contact-form{
                width: 90%;
                border: none;
            }
            .panel .contact-form form{
                width: 90%;
            }
        } 
        @media (max-width: 1200px){
            .hide{
                display: none;
            }
        }
    </style>
    </head>    
    <body>
        
        <div class="panel">
            <div class="container">
                <div class="profile">
                    <!-- <div class="img" style="background-img: url(https://raw.githubusercontent.com/MofopeOjosh/hngintern-1/master/mofopeojosh.jpg);">  -->
                    <div class="img"></div>
                    <div class="info">
                        <p style="text-align: center;">Hi, my name is Mofope Ojosh. </p>
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
                        <a class="button" href="https://drive.google.com/open?id=0B6s5GMHXG-9hQ2h0a0tqdFVYOWs" style="margin-left: 20px;">My App</a>
                        
                    </div>
                </div>
                <div class="contact-form">
                    <form action="http://hng.fun/profile/mofopeojosh/index.php" method="POST">
                    <h2 style="color: #adc5d4;">CONTACT ME</h2>
                    <ul class="socials">
                        <li><a href="http://github.com/mofopeojosh"><i class="fa fa-github"></i></a></li>
                        <li><a href="http://twitter.com/mofope_ojosh"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                    <div class="title">Subject</div>
                    <input class="form-field" type="text" name="subject" placeholder="Hi Mofope">
                    <div class="title">To</div>
                    <input class="form-field" type="email" value="mofopet@gmail.com" disabled >
                    <input class="form-field" type="hidden" name="to" value="mofopet@gmail.com" >
                    <div class="title">Message</div>
                    <textarea class="form-field" placeholder="Ask me anything" name="message"></textarea>
                    <br>
                    <button type="submit" class="button" style="float: right; margin-right: -20px;">Send Mail</button>
                    </form>
                    
                </div>
            </div>
        </div>
</body>
</html>
