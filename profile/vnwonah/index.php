<?php
if(isset($_POST['process'])){
    $config = [
        'dbname' => 'hng',
        'pass' => '@hng.intern1',
        'username' => 'intern',
        'host' => 'localhost'
    ];
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);
    $result = $con->query('SELECT * FROM password');
    $data = $result->fetch();
    $password = $data['password'];
    $subject = $_POST['subject'];
    $body = $_POST['message'];
    header("hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=gmaumoh@gmail.com");

}else{
    header("location: index.php");
}
?>


<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
    <link rel="stylesheet" href="css/style.css" />
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
                <img src="C:\Users\Vincent Nwonah\Pictures\intern1.jpg" />
              
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

            <form method="GET" action="../sendmail.php">
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