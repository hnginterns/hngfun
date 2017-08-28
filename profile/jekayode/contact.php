<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'jekayode@live.com';
    $body = $_POST['message'];

    if($body == '' || $body == ' ') {
      $error[] = 'Please enter the message';
    }


    if($subject == '' || $subject == ' ') {
      $error[] = 'Please enter the subject.';
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


<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Hotels.ng Intership Lessons</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    

  </head>
  
  <body>
    <h1>Hotels.ng Intership Lessons</h1>
    
    <header>
       <nav>
          <ul class="nav inline-items">
            <li><a href="http://hng.fun/profile/jekayode/">Home</a></li>
            <li><a href="http://hng.fun/">Main Site</a></li>
            <li><a href="contact.php">Contact Me</a></li>
         </ul>
      </nav>
    </header>

    <div class="columnsContainer">

    

      <div class="leftColumn">
        <h2>Contact Me</h2>
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
      
        <div class="container">
            <form action="" method="post">

              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="Subject">

              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

              <input type="submit" value="Submit">

            </form>
</div>
      </div>

       

      

    </div>
    
    <footer>
      <p>
          <i class="fa fa-slack" aria-hidden="true"></i> <a href="https://hnginterns.slack.com">@jekayode</a>   |  <i class="fa fa-github" aria-hidden="true"> </i> <a href="https://github.com/jekayode" target="_blank">@jekayode</a>  | <a href="https://github.com/jekayode/hnl-internship" target="_blank">#Stage1 Output</a> | <a href="https://github.com/jekayode/hngprofile" target="_blank">Github Repo for this Page</a>
      </p>
      <p>&copy; Emmanuel Joseph (@jekayode). For Hotels.ng Developer Internship 2017</p>
    </footer>

  </body>
</html>

