<?php

    $config = include('../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);

    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];

    if (isset($_GET['submit'])) {

        $subject = htmlentities(strip_tags(trim($_GET['subject'])));
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['message'])));
        $to = "talk2vinciii@gmail.com";

        $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

        header("Location: " . $location);

    }

 ?>



<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
    <link rel="stylesheet" href="vnwonah/css/style.css" />
    <title>VNwonah - HNGInterns</title>
</head>
<body>

    <div class="n-profile-bar">
        <div class="name">
            <h3>Nwonah Vincent</h3>
            <p>Intern at Hotels.ng Internship Programme </p>
        </div>
        <div class="about">
            <div class="my">
                <img src="https://s30.postimg.org/3qibxly81/intern1.jpg" alt="Vincent's Image" />
              
            </div>
            <div class="job">
                <p>My name is Nwonah Vincent. I'm concluding a B.Sc. programme in Computer Science in September of 2017.
 I am above average proficient at C# and ASP.NET web technologies (according to my pluralsight test) and i'm looking to work with a team where i can groom my skills</p>
                <p class="link"><a href="google.com">Click to View My Stage 1 Repo</a></p>
            </div>
        </div>
        <div class="n-contact">
            <ul>
                <li class="fb">
                    <a href="http://www.facebook.com/vinceee.n1">Facebook</a>
                </li>
                <li class="slack">
                    <a href="#">Slack : vnwonah</a>
                </li>
                <li class="twitter">
                    <a href="http://www.twitter.com/vinnwonahjnr">Twitter</a>
                </li>
                <li class="github">
                    <a href="http://github.com/vnwonah">Github</a>
                </li>
            </ul>
        </div>

        
        <br/>

        <div id="contact-area">
            <div class="name1">
                <h3>Contact Me</h3>
                <p>Fill out the contact form to send me a message </p>
            </div>

            <form class="" action="vnwonah.php" method="get">
                <input type="text" name="name" id="name" placeholder="Name" />

                <input type="text" name="subject" id="subject" placeholder="Subject of Message" />

                <input type="text" name="email" id="email" placeholder="Your Email Address" />


                <textarea name="message" rows="10" cols="20" id="message" placeholder="Enter your message here..."></textarea>
                <input type="hidden" name="password" value="<?= $password; ?>" />
                <input type="hidden" name="to" value="<?= $to; ?>" />

                <input type="submit" name="submit" value="Submit" class="submit-button" />
            </form>

            <div style="clear: both;"></div>

        </div>
    </div>

</body>
</html>