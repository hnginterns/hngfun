<?php
$config = include('../config.php');
$dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
$connect = new PDO($dsn, $config['username'], $config['pass']);
$exe = $connect->query('SELECT * FROM password LIMIT 1');
$data = $exe->fetch();
$password = $data['password'];
?>
<!doctype html>
<!--suppress EqualityComparisonWithCoercionJS -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!--<link rel="stylesheet" href="assets/css/styles.css">-->

    <title>Atauba Prince Mfon (achowba)</title>

    <style rel="stylesheet" type="text/css">
        * {
            font-family: Raleway;
            padding: 0;
            margin: 0;
        }

        html, body {
            background-size: cover;
            background-repeat: no-repeat;
            background-color: #232323 !important;
        }

        .dp {
            display: inline-block;
        }

        .page-container {
            width: 100%;
            margin: 0 auto;
            /*background-color: #f5f5f5;*/
        }

        #profile {
            padding: 2% 0 0;
            width: 98%;
            /*float: left;*/
        }

        .profile-img-container {
            border: 2px solid #9e9e9e;
            width: 249px;
            height: 249px;
            margin: 0 auto 5%;
            overflow: hidden;
        }

        .profile-img {
            width: 250px;
            margin: 0 auto;
            transition: 0.5s all;
            cursor: pointer;
        }

        .profile-img:hover {
            transform: scale(1.1);
        }

        .profile-text-container {
            padding: 0px 8%;
            margin: 0 0 20px;
        }

        .profile-text {
            text-align: center;
            font-size: 1.2rem;
            word-spacing: 3px;
            /*color: #fff;*/
            color: #eee;
        }

        .profile-links-container {
            text-decoration: none;
            text-align: center;
            margin: 0 0 20px;
        }

        .profile-link {
            color: black;
            font-size: 2rem;
            margin: 0 0 0 10px;
        }

        .stages {
            text-align: center;
            margin: 0 0 25px;
        }

        .stage1 {
            color: #0d47a1;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .prt-site {
            text-decoration: none;
            /*color: #fff;*/
            color: #0d47a1;
        }

        .profile-link span {
            -webkit-transition: all 1s;
            -moz-transition: all 1s;
            -ms-transition: all 1s;
            -o-transition: all 1s;
            transition: all 1s;
        }

        .profile-link:hover span {
            -webkit-transform: rotateY(360deg);
            -moz-transform: rotateY(360deg);
            -o-transform: rotateY(360deg);
            -ms-transform: rotateY(360deg);
            color: grey;
        }

        .pl-gh, .pl-sl, .pl-tw, .pl-ig, .pl-fb {
            color: #fff !important;
        }

        .pl-gh:hover {
            color: #24292e !important;
        }

        .pl-sl:hover {
            color: #edb431 !important;
        }

        .pl-tw:hover {
            color: #1da1f2 !important;
        }

        .pl-ig:hover {
            color: #e13d61 !important;
        }

        .pl-fb:hover {
            color: #3b5998 !important;
        }

        #contact {
            width: 50%;
            margin: 0 auto 50px;
            /*float: right;*/
        }

        .contact-header-text {
            text-align: center;
            margin-top: 3%;
            margin-bottom: 20px;
            color: #eee;
        }

        #contact-form {
            width: 98%;
        }

        #name, #email, #subject, #message {
            margin-bottom: 10px;
            width: 98%;
            padding: 1%;
            height: 20px;
            outline: none;
            border: none;
            color: #232323 !important;;
        }

        #message {
            resize: none;
            height: 180px;
        }

        #send-message {
            width: 20%;
            margin: 0 auto;
            padding: 1.5% 1%;
            color: white;
            float: right;
            background-color: #232323;
            border: 1px solid #198037;
            outline: none;
            cursor: pointer;
            transition: all 0.5s;
        }

        #send-message:hover {
            background-color: #198037;
            border: 1px solid #232323;
        }

        #email:focus, #subject:focus, #message:focus {
            border-color: #232323;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px #232323;
            outline: 0 none;
        }

        /*#subject {
            width: 100%;
        }*/

        @media (max-width: 1000px) {
            .dp {
                display: block;
            }

            #profile {
                width: 98%;
            }

            #contact {
                width: 94%;
                padding: 0 3%;
            }
        }

        @media (max-width: 360px) {
            .profile-text {
                font-size: 1rem;
            }

            .profile-img-container {
                width: 200px;
                height: 200px;
            }

            .profile-img {
                width: 200px;
            }

            #send-message {
                width: 100%;
                padding: 2% 1%;
            }
        }
    </style>
</head>
<body>
<div class="page-container">
    <div id="profile">
        <div class="profile-img-container">
            <img class="profile-img"
                 src="https://avatars0.githubusercontent.com/u/20032269?v=4&u=7f280c930a24fd8e45877e3a4a78181e04acd426&s=400"
                 alt="Atauba Prince Mfon">
            <!--<p class="profile-name">Atauba Prince Mfon</p>-->
        </div>
        <div class="profile-text-container">
            <p class="profile-text">
                I am Atauba Prince Mfon. I am a software developer from Akwa Ibom State.
                I am currently a diploma student at National Institute of Information Technology.
                I love football, watching movies, reading and making puns. I started coding May 2016 and the journey
                has been interesting so far and <a href="http://www.niitportharcourt.com/" class="prt-site">this is a
                    site</a> I worked on with my classmates in school.
            </p>
        </div>
        <div class="profile-links-container">
            <a href="https://github.com/Achowba" class="profile-link" target="_blank"><span
                        class="pl-gh fa fa-github"></span></a>
            <a href="https://hnginterns.slack.com/team/achowba" class="profile-link" target="_blank"><span
                        class="pl-sl fa fa-slack"></span></a>
            <a href="https://twitter.com/princeatauba" class="profile-link" target="_blank"><span
                        class="pl-tw fa fa-twitter"></span></a>
            <a href="https://www.instagram.com/achowba/achowba.php" class="profile-link" target="_blank"><span
                        class="pl-ig fa fa-instagram"></span></a>
            <a href="https://www.facebook.com/achowba" class="profile-link" target="_blank"><span
                        class="pl-fb fa fa-facebook"></span></a>
        </div>
        <div class="stages">
            <a class="stage1" href="https://github.com/Achowba/hng-internship" target="_blank">HNG Internship - Stage 1
                Result</a>
        </div>
    </div>
    <hr>
    <div id="contact">
        <div class="contact-wrapper">
            <h1 class="contact-header-text">Contact me or say hello!</h1>

            <form id="contact-form">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <input type="text" id="email" name="email" placeholder="Your Email" required>
                <input type="text" id="subject" name="subject" placeholder="Your Subject" required>
                <textarea id="message" name="message" placeholder="Type your message here" required></textarea>
                <input type="hidden" name="pwd" value="<?php echo $password; ?>" id="pwd">
                <input type="submit" id="send-message" name="submit" value="SUBMIT" onclick="sendMessage(event)">
            </form>
        </div>
    </div>
</div>
<script>
    function sendMessage(event) {

        event.preventDefault();

        nameField = document.getElementById("name");
        emailField = document.getElementById("email");
        subjectField = document.getElementById("subject");
        bodyField = document.getElementById("message");
        pwd = document.getElementById("pwd").value;

        nameValue = nameField.value;
        emailValue = emailField.value;
        subjectValue = subjectField.value;
        bodyValue = bodyField.value;

        if (nameValue.trim() == "" || emailValue.trim() == "" || subjectValue.trim() == "" || bodyValue.trim() == "") {
            alert("Please fill all input fields! 🙂");
        } else {
            bodyValue = ("From: " + emailValue + " ( " + nameValue + " ) " + "\n" + "\nMessage: " + bodyValue);
            prot_host = location.protocol + '//' + location.host;
            url = prot_host + "/sendmail.php?password=" + pwd + "&subject=" + subjectValue + "&body=" + bodyValue + "&to=justprince9@gmail.com";
            window.location = url;
        }
    }

</script>
</body>
</html>
