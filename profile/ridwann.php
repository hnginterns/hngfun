
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'thosynlasisi@gmail.com';
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
            overflow: none;
        }
        
        body {
            top: 0;
            font-size: 1.25rem;
            overflow: hidden;
            margin: 0px;
            font-family: 'Titillium Web', sans-serif;
        }
        
        section {
            color: #fff;
            text-align: center;
        }
        
        div {
            height: 100%;
        }
        
        article {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            padding: 15px;
        }
        
        h1 {
            font-size: 2.2em;
            margin: 0 0 0.75rem 0;
            color: rgba(12, 8, 8, 0.72);
            cursor: pointer;
        }
        h1:hover{
            color: #9B9C95;
            transition: color 2s;
        }
        /* Pattern styles */
        
        .container {
            display: table;
            width: 100%;
        }
        
        .left-half {
/*            background-color: #cfdbeb;*/
            position: absolute;
/*            left: 0px;*/
            width: 50%;
            background-repeat:no-repeat;
            background-size:cover;
            background-position: center center;
            background-attachment: fixed;
        }
        
        .left-half>img {
            height: 100% !important;
        }
        
       .right-half {
            background-color: #DDDDDD;
            position: absolute;
            right: 0px;
            width: 50%;
        }
        .about{
            color: rgba(12, 8, 8, 0.72);
        }
        
        @media (max-width: 600px) {
            .right-half {
                width: 100%;
                height: 50%;
                bottom: 0;
            }
            .left-half {
                top: 0;
                width: 100%;
                height: 50%;
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
            color: white;
            background-color: #582a80;
            height: 28px;
            width: 28px;
            line-height: 28px;
            display: block;
            font-size: 15px;
            opacity: 0.5;
            border-radius: 10px;
}
        
        .link {
            color: #00ffac;
            text-decoration: none;
        }
        
        .icons ul li a:hover,
        .link:hover {
/*            opacity: 1;*/
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        
        .slack {
            font-size: 28px;
            color: rgba(63, 37, 64, 0.84);
            padding-bottom: -30px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lasisi Tosin | Ridwan</title>
    <script src="https://use.fontawesome.com/1dbde377a5.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>

<body>
    <section class="container">
        <div class="left-half">
            <img src="http://res.cloudinary.com/imani/image/upload/v1503327986/IMG_20170421_091759_317_lkbxl1.jpg" alt="purri's image">
        </div>
        <div class="right-half">
            <article>
                <div class="name">
                    <h1>Lasisi Tosin Ridwan</h1>

                </div>
                <p class="slack">Slack handle:@ridwan</p>

                <div class="icons">
                    <ul>
                        <li><a class="twitter" href="http://twitter.com/@_yhincah"><i class="fa fa-twitter"></i></a></li>
<!--                        <li><a class="facebook" href="http://facebook.com/Tosin Lasisi"><i class="fa fa-facebook"></i></a></li>-->
                        <li><a class="instagram" href="http://instagram.com/_yhincah"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="github" href="http://github.com/ridwan099"><i class="fa fa-github-alt"></i></a></li>
<!--                        <li><a class="slack" href="http://hng.interns.herokuapp.com"><i class="fa fa-globe"></i></a></li>-->
                    </ul>
                </div>
                <div class="about">
                    <p>
                        <br>Hello! I am Tosin, a UI Learner.
                        <br>I study Computer Science in the Federal University of Agriculture Abeokuta (FUNAAB).
                        <br>I am really passionate about technology and I hope to be an outstanding UI designer someday :).
<!--                        <br>Here is the <a class="link" href="http:github.com/OreoluwaOjo/HNG-Test">Link</a> to my first task as an intern at Hotels.ng-->
                    </p>
                </div>
            </article>
        </div>
        </div>

</body>

</html>
