<?php
    //if "email" variable is filled out, send email
      if (isset($_GET['submit']))  {
      
      //Email information
      $to = "osideindeo@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['body'];
          
      $config = include(dirname(dirname(__FILE__)).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
          
            header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
        }
            
          ?>

    <!DOCTYPE html>


    <html lang="en">

    <head>


        <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <title>Osideinde's Profile</title>

        <script src="js/bootstrap.js"></script>
        <style>
            .image img {
                border-radius: 0.35em;
                display: block;
                clear: right;
                z-index: -1;
                display: inline-block;
            }
            
            .image.avatar {
                border-radius: 50%;
                display: inline-block;
            }
            
            .image.avatar:before {
                display: none;
                display: inline-block;
            }
            
            .image.avatar img {
                max-width: 69%;
                border-radius: 100%;
                width: 100%;
                display: inline-block;
            }
            /* Icon */
            
            .icon {
                text-decoration: none;
                border-bottom: none;
                position: relative;
                display: inline-block;
            }
            
            .inner {
                position: fixed;
                padding-top: 0px;
                padding-right: 0px;
                /*
            padding-bottom: 100px;
            padding-left: 910px;
*/
                display: inline-block;
                top: 50%;
                left: 50%;
                margin-top: -50px;
                margin-left: 100px;
            }
            
            .icon:before {
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                font-family: FontAwesome;
                font-style: normal;
                font-weight: normal;
                text-transform: none !important;
            }
            
            .icon>.label {
                display: none;
            }
            
            body {
                background-image: url("https://cdn.pixabay.com/photo/2014/09/21/14/39/rain-455124_960_720.jpg");
                background-repeat: repeat;
                background-position: right top;
                margin-right: 200px;
                background-attachment: fixed;
                z-index: -1;
            }
            
            ul.icons {
                cursor: default;
                list-style: none;
                padding-left: 0;
                bottom: 100px;
                right: 100px;
                width: 500px;
                top: 80px;
            }
            
            ul.icons li {
                display: inline-block;
                padding: 0 1em 0 0;
            }
            
            ul.icons li:last-child {
                padding-right: 0;
            }
            
            ul.icons li .icon:before {
                font-size: 1.5em;
            }
            
            h1 {
                /*
            display: inline;
            float: center;
*/
                color: black;
                top: 80%;
                left: 40%;
                margin-top: -215px;
                margin-left: -70px;
            }
            
            input[type=submit],
            input[type=reset] {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
            }
            
            input[type=submit]:hover {
                background-color: #45a049;
            }
            
            input[type=reset]:hover {
                background-color: #45a049;
            }
            
            input[type=text],
            input[type=email] {
                width: 60%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            
            textarea {
                width: 60%;
                height: 100px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px;
                resize: none;
            }

        </style>
    </head>


    <body>


        <div>
            <a href="#" class="image avatar"><img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/15439920_1279735222069485_4369917311499126489_n.jpg?oh=91ab85c73b0718f61aaedd7b1ea42ac5&oe=5A1F2F1A" alt="Osideinde Oluwadara" /></a>



            <div class="inner">

                <h1><strong>Oluwadara</strong> is a wonderfull and simple young fellow, an ex-student of the <br>Federal University of Agriculture (FUNAAB). <br> Stage 1

                    <a href="https://github.com/holumiede/HNG-intern" class="icon fa-github"><span class="label">Github</span></a>
                </h1>
                <ul class="icons">
                    <li><a href="http://twitter.com/holumiede" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://github.com/holumiede" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="https://hnginterns.slack.com/messages/@holumiede/" class="icon fa-slack"><span class="label">Slack</span></a></li>
                    <!--
                <li><a href="osideindeo@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li> -->
                </ul>



                <form method="GET" name="contact_form">

                    <div class="row uniform 50%">

                        <h2>Contact Me</h2>
                        <div class=""><input type="text" name="subject" id="name" placeholder="Name" /></div>
                        <!--                        <div class=""><input type="email" name="email" id="email" placeholder="Email" /></div>-->
                        <div class=""><textarea name="body" id="message" placeholder="Message" rows="4"></textarea></div>

                    </div>

                    <ul class="icons">

                        <li><input type="submit" value="Send Message" id="submit" name="submit" /></li>
                        <li><input type="reset" value="reset" id="reset" name="reset" /></li>

                    </ul>

                </form>


            </div>










        </div>










    </body>

    </html>
