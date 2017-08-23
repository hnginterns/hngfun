<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'perezpeter32@gmail.com';
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peter Perez</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            line-height: 1.5;
            background-color: #efefef;
            color: #161616;
            background-image: url(http://www.filetolink.com/016c0e6edc);
        }
        
        a {
            text-decoration: none;
            color: inherit;
            font-size: inherit;
            color: #555;
        }
        
        figure {
            background-image: url(http://www.filetolink.com/8acb616934);
            background-size: cover;
            border-radius: 4px;
            height: 200px;
            width: 200px;
            border: 3px solid #10a357;
        }
        
        .container {
            display: flex;
            max-width: 700px;
            height: 100vh;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
        }
        
        .wrapper {
            display: flex;
            justify-content: center;
            align-content: center;
        }
        
        .about,
        .profile {
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: left;
            justify-content: flex-start;
        }
        
        .about {
            padding-left: 20px;
        }
        
        .about p {
            font-size: 14px;
        }
        
        .about a, .seperate2 {
            margin-top: 20px;
            color: #10a357;
            font-size: 14px;
        }
        
        .profile p {
            font-size: 14px;
            color: #565656;
            opacity: 0.8;
        }
        
        .profile h4 {
            margin-top: 5px;
        }
        
        .footer-wrapper {
            display: flex;
            justify-content: space-between;
        }
        
        .separate {
            display: flex;
            justify-content: space-between;
        }

        .separate p:hover{
            cursor: pointer;
        }
        
        .socials a {
            padding-left: 5px;
        }
        
        .socials a i {
            padding-right: 10px;
        }
        
        .socials span {
            display: none;
        }


        #cnt{
            display: none;
            width: 480px;
        }

        #cnt input, #cnt textarea{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 0px;
        }

        #cnt textarea{
            height: 100px;
            text-align: left;
        }

        #cnt #submitt{
            background-color: #10a357;
            color: #fff;
        }

        #ram{
            display: none;
        }

        .inps{
            .display: flex;
            .justify-content: space-between;
        }

        .inps input{
            .flex-basis: 49%;
        }
        
        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            .wrapper {
                flex-flow: column wrap;
                padding: 20px;
            }
            .about {
                padding: 0px;
                text-align: center;
                margin-top: 40px;
            }
            .profile {
                margin: 0 auto;
                text-align: center;
            }
            .socials a span {
                display: inline;
            }
            .footer-wrapper {
                flex-wrap: wrap;
                align-content: center;
            }
            .separate {
                margin: 0 auto;
            }
        }

        @media only screen and (max-width: 500px) {
            /* For mobile phones: */

            #cnt{
                width: 100%;
            }
            
        }
    </style>

</head>

<body>


    <div class="container">
        <div class="wrapper">

            <div class="profile">

                <figure></figure>

                <h4>Peter Peregbakumo</h4>
                <p>Web &amp; Software developer</p>
                <p><i class="fa fa-envelope"></i> perezpeter32@gmail.com</p>
                <p><i class="fa fa-slack"></i> @peterperez</p>

            </div>

            <div class="about">


                <div id="abt">
                <h3>About Me</h3>
                <p style="opacity: 0.9">I am technology-driven and have the love for computer programs. I am an expert in Back-end Web Development (PHP, Laravel) and Front-end (HTML, CSS, JavaScript). I am also proficient in Java (Swing, JavaFX, Android), C and MIPS. I have
                    always wanted to impart my society with my technological know-how. In light of that, I am currently studying Computer Science at Lancaster University, Ghana. I am proudly Nigerian. Feel free to contact me.</p>

                    </div>


                 <div id="cnt">
                <h3>Contact Me</h3>

<?php if(isset($error) && !empty($error)): ?>
          <blockquote style="text-align: left;padding:5px;background: #fcf6f6; border-left:15px solid red;">
            <ul style='list-style:none;'>
              <?php
                foreach ($error as $key => $value) {
                  echo "<li>$value</li>";
                }
              ?>
            </ul>
          </blockquote>
        <?php endif; ?>



                <form method="post" action="">
                <div class="inps">
                <input type="text" name="subject" placeholder="Enter Subject" required>
                </div>
                
                <textarea name="message" placeholder="Enter Message here" required></textarea>

                <input type="submit" id="submitt" value="send">

                </form>

                    </div>


                <div class="footer-wrapper">
                    <div class="separate">
                        <a href="https://github.com/peterperez/HNG-Test" target="_blank">
                            <i class="fa fa-link"></i> getting-started-h2-2017 Task</a>
                    </div>

                    <div class="separate socials">

                        <a href="https://github.com/peterperez" target="_blank"><i class="fa fa-github"></i><span>Github</span></a>
                        <a href="http://twitter.com/ambarelyscared" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="http://facebook.com/peter.pere.33" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>

                    </div>
                </div>

                <div class="footer-wrapper">
                    <div class="separate" style="margin-top: 10px;">
                        <p onclick="displayForm()" id="smn">
                            <i class="fa fa-envelope"></i> Send me a message NOW!

                            </p>

                            <p onclick="displayAbout()" id="ram">
                            <i class="fa fa-info"></i> Read about me

                            </p>

                            <script type="text/javascript">
                                function displayForm(){
                                    var messageBox = document.getElementById('cnt');
                                    var aboutBox = document.getElementById('abt');
                                    var smn = document.getElementById('smn');
                                    var ram = document.getElementById('ram');
                                    if(messageBox.style.display = "none"){
                                        aboutBox.style.display = "none";
                                        smn.style.display = "none";
                                        messageBox.style.display = "block";
                                        ram.style.display = "block";
                                    }
                                }

                                function displayAbout(){
                                    var messageBox = document.getElementById('cnt');
                                    var aboutBox = document.getElementById('abt');
                                    var smn = document.getElementById('smn');
                                    var ram = document.getElementById('ram');
                                    if(aboutBox.style.display = "none"){
                                        messageBox.style.display = "none";
                                        ram.style.display = "none";
                                        aboutBox.style.display = "block";
                                        smn.style.display = "block";
                                    }
                                }
                            </script>
                    </div>

                    
                </div>

            </div>

        </div>
    </div>
</body>

</html>