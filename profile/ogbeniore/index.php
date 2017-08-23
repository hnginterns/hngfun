<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    $error = [];

    $subject = $_POST['subject'];
    $to  = 'oreeboy@gmail.com';
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
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            top: 0;
            font-size: 1.25rem;
            font-family: sans-serif;
            margin: 0px;
        }
        
        section {
            color: #fff;
            text-align: center;
        }
        
        div {
            height: 100%;
        }
        
        article.about {
            left: 50%;
            width: 100%;
            padding-top: 40px;
        }
        
        h1 {
            font-size: 2.2em;
            margin: 0 0 0.75rem 0;
        }
        
        .container {
            display: table;
            width: 100%;
        }
        
        .left-half {
            background-color: #cfdbeb;
            position: absolute;
            left: 0px;
            width: 50%;
            overflow: hidden;
        }
        
        .left-half>img {
            height: 100% !important;
        }
        
        .right-half {
            background-color: #2a4086;
            position: absolute;
            right: 0px;
            width: 50%;
            overflow-y: scroll;
        }
        
        @media (max-width: 700px) {
            body {
                overflow-y: scroll;
                overflow-x: hidden;
                background-color: #2a4086;
            }
            .right-half {
                width: 100%;
                text-align: center;
                overflow-y: inherit;
            }
            .left-half {
                top: 0;
                width: 100%;
                position: relative;
                align-items: center;
                overflow-x: hidden;
            }
            article {
                width: auto;
            }
            #form-div {
                width: auto !important;
                padding: 0;
            }
            .left-half>img {
                max-width: 100%;
                max-height: 100% !important;
            }
        }
        
        @media (max-width: 500px) {
            .left-half>img {
                max-width: 100%;
                height: auto !important;
            }
        }
        
        .icons {
            margin-top: 10px;
            text-align: center;
        }
        
        .icons ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .icons ul li:last-child {
            margin-right: 0;
        }
        
        .icons li {
            display: -webkit-inline-box;
            padding-left: 5px;
        }
        
        .icons ul li a {
            color: #2a4086;
            background-color: #cfdbeb;
            height: 28px;
            width: 28px;
            line-height: 28px;
            display: block;
            font-size: 16px;
            opacity: 0.8;
            border-radius: 5px;
        }
        
        .link {
            color: #cfdbeb;
            text-decoration: none;
        }
        
        .slack.contact {
            background-color: #cfdbeb;
            color: #2a4086;
            font-size: 3em;
            font-weight: 300;
            text-align: center;
        }
        
        .icons ul li a:hover,
        .link:hover,
        #button:hover {
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        
        .about>p {
            font-size: 1.4em;
        }
        
        .slack {
            font-size: 1.5em;
            color: #cfdbeb;
            padding-bottom: -30px;
        }
        
        #feedback-page {
            text-align: center;
        }
        
        #form-main {
            width: 100%;
            float: center;
            padding-top: 0px;
            padding-left: 10%;
            padding-right: 10%;
            padding-bottom: 30px;
        }
        
        #form-div {
            bottom: 2px;
            width: auto;
        }
        
        .feedback-input {
            color: #3c3c3c;
            font-weight: 500;
            font-size: 18px;
            border-radius: 0;
            line-height: 22px;
            background-color: #fbfbfb;
            padding: 13px 13px 13px 54px;
            margin-bottom: 10px;
            width: 100%;
            border: 3px solid rgba(0, 0, 0, 0);
        }
        
        .feedback-input:hover,
        .feedback-input:focus {
            transform: scale(1.1);
        }
        
        textarea {
            width: 100%;
            height: 150px;
            line-height: 150%;
            resize: vertical;
        }
        
        #button {
            float: center;
            width: 40%;
            border: #2a4086 solid 2px;
            cursor: pointer;
            background-color: #cfdbeb;
            color: #2a4086;
            font-size: 24px;
            padding-top: 12px;
            padding-bottom: 12px;
            margin-top: -4px;
            font-weight: 500;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oreoluwa Ojo | OgbeniOre</title>
</head>

<body>
    <section class="container">
        <div class="left-half">
            <img src="https://res.cloudinary.com/plushdeveloper/image/upload/v1503153956/IMG_20170119_174852_589_qsoqaz.jpg" alt="ogbeniore-image">
        </div>
        <div class="right-half">
            <article class="about">
                <div class="name">
                    <h1>OJO OREOLUWA</h1>

                </div>
                <p class="slack"><strong>Slack handle: </strong> @ogbeniore</p>

                <div class="icons">
                    <ul>
                        <li><a class="twitter" href="http://twitter.com/iam_vencedor"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="facebook" href="http://facebook.com/oreeboy"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="instagram" href="http://instagram.com/iamvencedor"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="github" href="http://github.com/OreoluwaOjo"><i class="fa fa-github-alt"></i></a></li>
                        <li><a class="website" href="http://oreoluwaojo.herokuapp.com"><i class="fa fa-globe"></i></a></li>
                    </ul>
                </div>
                <div class="about">
                    <p>I am a web developer based in nigeria.
                        <br>I am studying computer science in FUNAAB
                        <br>I write HTML, CSS, JavaScript and a little bit of Angular.
                        <br>Here is the <a class="link" href="http://github.com/OreoluwaOjo/HNG-Test">Link</a> to my first task as an intern at Hotels.ng</p>
                </div>
                <p class="slack contact">Contact me</p>
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

                <div id="form-main">
                    <div id="form-div">
                        <form class="form" id="form1" action="" method= "POST" >

                            <p class="name">
                                <input name="subject" type="text" class="feedback-input" placeholder="Subject" id="name"  required=""/>
                            </p>

                            <!-- <p class="email">
                                <input name="email" type="text" class="feedback-input" id="email" placeholder="Email" />
                            </p> -->

                            <p class="text">
                                <textarea name="message" class="feedback-input" id="message" placeholder="Message" required=""></textarea>
                            </p>


                            <div class="submit">
                                <input type="submit" value="SEND" id="button" name="submit" required="" />
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        </article>
        <script src="https://use.fontawesome.com/1dbde377a5.js"></script>
</body>

</html>