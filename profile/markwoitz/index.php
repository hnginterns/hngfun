<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'icnwakanma@gmail.com';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Markowitz Profile</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
    <script src="https://use.fontawesome.com/a20503d9b5.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Ikechukwu Nwakanma</h1>
        </header>
            <main>
                <aside>
                    <img src="http://i.imgur.com/2CShSEG.jpg" alt="Ikechukwu Nwakanma">    
                </aside>
                
                <div class="primary">
                    <h2 class="about-header">About Me</h2>
                        <p>
                            I love making things work on computer. A graduate of Computer Science from the unique University of Port Harcourt,
                            a strong advocate of Jollof Rice. Proficient in PHP & Mysql, HTML, CSS, Javascript. 
                        </p>
                        <p>
                            You can find me on:
                            <div class="social">
                                <ul>
                                    <li><span><a href="https://www.facebook.com/ik.nwakanma"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span></li>
                                    <li><span><a href="https://www.twitter.com/ik_nwakanma"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></span></li>
                                    <li><span><a href="https://github.com/icnwakanma"><i class="fa fa-github-square" aria-hidden="true"></a></i></span></li>
                                </ul>
                            </div>
                        </p>

                        <h2 class="about-header">HNG TASKS</h2>
                        <p>
                            <ol class="task-list">
                                <li><a href="https://github.com/icnwakanma/hng-intern-stage1">Stage 1</a></li>
                                <li><a href="https://github.com/icnwakanma/hng-intern-stage2">Stage 2</a></li>
                            </ol>
                        </p>
                        <hr>

                        <h2 class="about-header">Send Me a Message</h2>
                        <form action="" method="post">

                            <div class="form-group">
                                <input type="text" name="subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="7"></textarea>
                            </div>
                            <input type="submit" id="submitt" value="send">
                        </form>
                </div>
            </main>
        <footer>
            <p>Designed with <i class="fa fa-heart" aria-hidden="true"></i> by me</p>
        </footer>
    </div>
</body>
</html>
