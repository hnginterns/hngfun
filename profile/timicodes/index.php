<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $error = [];
        $name = $_POST['name'];
        $to  = 'tejumoladavid@gmail.com';
        $message = $_POST['message'];

        if($message == '' || $message == ' ') {
            $error[] = 'Message cannot be empty.';
        }

        if($name == '' || $name == ' ') {
            $error[] = 'Name cannot be empty.';
        }

        if(empty($error)) {
            $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
            $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
            $con = new PDO($dsn, $config['username'], $config['pass']);
            $exe = $con->query('SELECT * FROM password LIMIT 1');
            $data = $exe->fetch();
            $password = $data['password'];
            $uri = "/sendmail.php?to=$to&body=$message&subject=$name&password=$password";
            header("location: $uri");
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tejumola David Timmy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #efefef;
            background-image: url(http://res.cloudinary.com/tarrot-system-inc/image/upload/v1503349370/dot_srox60.png);
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
        }
        .container {
            display: flex;
            max-width: 700px;
            height: 100vh;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-content: center;
        }
        .about b {
            font-size: 14px;
        }
        .avatar {
            background-size: cover;
            height: 190px;
            width: 190px;
            margin: 8px
        }
        .name {
            font-size: 15px;
            padding-left: 20px;
            padding-right: 5px;
            color: #00aced;
        }
        .name p {
            padding-left: 25%;
            padding-bottom: 5px
        }
        .about {
            line-height: 1.5;
        }
        .profile-social-links span {
            display: none;
        }
        .footer-wrapper {
            display: flex;
            justify-content: space-between;
            float: right;
            margin: 0px 15px;
        }
        .task {
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
        }
        .task a {
            text-decoration: none;
            color: #636b6f;
        }
        .fa-link {
            padding: 10px 12px;
            -o-transition: .5s;
            -ms-transition: .5s;
            -moz-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            background-color: #00aced;
            margin-left: 10px;
            color: #fff;
        }
        .fa-link:hover {
            background-color: #322f30;
        }
        .profile {
            background-color: #ffffff;
            margin-right: 20px;
            height: 255px;
        }
        .profile-social-links {
            color: #fff;
            margin-left: 18%;
        }
        ul.profile-social-links {
            align-items: center;
            float: right;
        }
        .profile-social-links li {
            vertical-align: top;
            height: 100px;
            display: inline;
        }
        .profile-social-links a {
            color: #fff;
            text-decoration: none;
        }
        .fa-slack {
            padding: 10px 12px;
            -o-transition: .5s;
            -ms-transition: .5s;
            -moz-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            background-color: #322f30;
        }
        .fa-slack:hover {
            background-color: #00aced;
        }
        .fa-github {
            padding: 10px 12px;
            -o-transition: .5s;
            -ms-transition: .5s;
            -moz-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            background-color: #322f30;
        }
        .fa-github:hover {
            background-color: #00aced;
        }
        .fa-twitter {
            padding: 10px 12px;
            -o-transition: .5s;
            -ms-transition: .5s;
            -moz-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            background-color: #322f30;
        }
        .fa-twitter:hover {
            background-color: #00aced;
        }
        .sendersname {
            padding: 20px;
            font-size: 14px;
            width: 460px;
            height: 40px;
            border: 0px;
        }
        .submit {
            padding: 10px;
            font-size: 14px;
            width: 460px;
            height: 40px;
            border: 0px;
        }
        .contact {
            margin-top: 25px;
        }
        .submit {
            background-color: #322f30;
            color: white;
        }
        .submit:hover {
            background-color: #00aced;
        }
        .message {
            height: 100px;
            padding: 20px;
            margin-top: 5px;
            font-size: 14px;
            width: 460px;
            border: 0px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="profile">
                <img src="https://avatars1.githubusercontent.com/u/7896429?v=4&u=319c16fdd85b8062a2337037c2dd2890db2fe5e9&s=400" class="avatar">
                <div class="name"><b>Tejumola David Timmy</b>
                <p>@timicodes</p>
            </div>
            <div class="task socials">
                <ul class="profile-social-links">
                    <li>
                        <a href="https://github.com/timi-codes" class="social-icon" target="_blank"> <i class="fa fa-github"></i></a>
                    </li>
                    <li>
                        <a href="https://hnginterns.slack.com/messages/@timicodes" class="social-icon" target="_blank"> <i class="fa fa-slack"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/codepreneur_" class="social-icon" target="_blank"> <i class="fa fa-twitter"></i></a>
                    </li>
                    <br>
                </ul>
            </div>
        </div>

        <div class="about">
            <h3>Bio</h3>
            <p>My Name <b>Tejumola David Oluwatimileyin</b>, a creative junkie from Lagos State. I break barriers with codes & <b>UI/UX designs</b>.<br/> I graduated as a <b>software engineer</b> from Africa University of Technology and Management,
            Benin Republic. My Major tools & development languages are <b>JAVA</b>, <b>PHP</b> and <b>Swift</b>.<br/></p>
            <p><b># Avid Programmer<br/># Google Android Associate Developer.<br> # Learning fullstack javascript (MEAN Stack).<br/># Music Lover<br/> </b></p>

            <form class="contact" method="POST">
                <!-- <h3>Contact Me</h3> -->
                <input class="sendersname" type="text" name="name" id="name" placeholder="Name" required>
                <textarea class="message" name="message" id="message" placeholder="Leave a message" required></textarea>
                <input type="submit" class="submit" value="Send a Message">
            </form>

            <div class="footer-wrapper">
                <div class="task">
                    <a href="https://github.com/timi-codes/HNG-Internship-Test" target="_blank">
                    Stage One Task<i class="fa fa-link"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>