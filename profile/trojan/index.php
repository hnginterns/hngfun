<!doctype html>
<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $name = $_POST['name'];
    $to  = 'ordrizzy@gmail.com';
    $message = $_POST['message'];

    if($message == '' || $message == ' ') {
      $error[] = 'Message cannot be empty.';
    }

    if($name == '' || $name == ' ') {
      $error[] = 'name cannot be empty.';
    }

    if(empty($error)) {
      $config = include(dirname(dirname(dirname(__FILE__))).'config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      $uri = "/sendmail.php?to=$to&message=$message&name=$name&password=$password";
      header("location: $uri");

    }

  }

 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Michael Okoh</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/reset.css">
      	<link rel="stylesheet" href="css/style.css">
        <style>
              @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);
              .social-icon {
                  color: #fff;
              }
              ul.social-icons {
                  margin-top: 10px;
                  align-items: center;
              }
              .social-icons li {
                  vertical-align: top;
                  display: inline;
                  height: 100px;
              }
              .social-icons a {
                  color: #fff;
                  text-decoration: none;
              }

              .fa-twitter {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }
              .fa-twitter:hover {
                  background-color: #00aced;
              }

              .fa-slack {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }

              .fa-slack:hover {
                  background-color: #00aced;
              }

              .fa-github {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }

              .fa-github:hover {
                  background-color: #00aced;
              }

              .fa-instagram {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }

              .fa-instagram:hover {
                  background-color: #00aced;
              }

              .fa-link {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }

              .fa-link:hover {
                  background-color: #00aced;
              }

              .fa-envelope {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }

              .fa-envelope:hover {
                  background-color: #00aced;
              }

              html, body {
                  background-color: #fff;
                  color: #636b6f;
                  font-family: 'Raleway', sans-serif;
                  font-weight: 100;
                  height: 100vh;
                  margin: 0;
              }

              .full-height {
                  /*height: 100vh;*/
              }

              .flex-center {
                  align-items: center;
                  display: flex;
                  justify-content: center;
              }

              .position-ref {
                  position: relative;
              }

              .top-right {
                  position: absolute;
                  right: 10px;
                  top: 18px;
              }

              .content {
                  text-align: center;
              }

              .title {
                  font-size: 50px;
              }

              ul {
                  color: #636b6f;
                  padding: 0 25px;
                  font-size: 12px;
                  font-weight: 600;
                  letter-spacing: .1rem;
                  text-decoration: none;
                  text-transform: uppercase;
              }

              .m-b-md {
                  margin-bottom: 30px;
              }

              .dp {
                border-radius: 45%;
                height: 200px  ;
              }

              .git {
                height: 100px;
              }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
              <img src="http://res.cloudinary.com/ichtrojan/image/upload/v1503355424/cha_tcsuue.jpg" class = "dp" alt="Profile Picture">
                <div class="title m-b-md">Michael Okoh</div>
                <ul class="social-icons">
                    <li><a href="https://github.com/ichtrojan" class="social-icon"> <i class="fa fa-github"></i></a></li>
                    <li><a href="https://hnginterns.slack.com/messages/@trojan" class="social-icon"> <i class="fa fa-slack"></i></a></li>
                    <li><a href="mailto:michael@okoh.co.uk" class="social-icon"> <i class="fa fa-envelope"></i></a></li>
                    <li><a href="https://www.instagram.com/ichtrojan" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
                    <li><a href="http://okoh.co.uk" class="social-icon"> <i class="fa fa-link"></i></a></li>
                    <li><a href="https://twitter.com/ichtrojan" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                </ul>
                &nbsp;

                <p>My Name is Michael Okoh, a Software Engineer from Lagos State<p>
                <p>I build Standard Web Applications with top Notch Design. My Major tools are <b>PHP, Laravel & Bootstrap.</b></p>
                <p>I also Use <b>C++, Java, Swift and Python</b> where needed.</p>

                <img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" alt="Github Logo" class="git">
                <p><a href="https://github.com/ichtrojan/HNG-Internship">Here is the link to my Stage 1 Project</a><p>
                &nbsp;

                <h3>Work</h3>
                <p><b>Software Engineer - ntel || Software Engineer - Tsaboin || CTO - autohub.ng || CEO - Okoh</b></p>

                <form class="cd-form floating-labels" method="GET" action="/sendmail.php">
              		<fieldset>


              			<div class="icon">
              				<label class="cd-label" for="cd-name">Name</label>
              				<input class="user" type="text" name="name" id="cd-name" required>
              		  </div>

              			<div class="icon">
              				<label class="cd-label" for="cd-textarea">Message</label>
                    	<textarea class="message" name="message" id="cd-textarea" required></textarea>
              			</div>

              			<div>
              		   <input type="submit" value="Send Message">
              		  </div>
              		</fieldset>
              	</form>

            </div>
        </div>
    </body>

</html>
