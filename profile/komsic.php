<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'kayodemicheal159@gmail.com';
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
<html>
<head>
  <title> KAYODE, Micheal O. (komsic)</title>
  <style type="text/css">
    
    body {
            padding: 50px;
        }

        div{
            padding: : 10px;
        }
        
        .shadow {
            box-shadow: 0 6px 10px 0;
            max-width: 50vw;
            margin: auto;
            text-align: center;
            background-color: orange;
            padding-bottom: 30px;
        }
        
        img {
            margin-right: 16px;
        }

        #align_horizontally {
            display: inline-block;
        }
  </style>

</head>
<body>


  <div>
    <div class="shadow">
      <img src="http://res.cloudinary.com/komsic/image/upload/v1503776474/komsic.jpg"
        alt="me" width="450px" height="450px"> <br>
    </div>

    <div class="shadow">
      <h1> KAYODE, Micheal O. (@komsic)</h1>

      <i> <a target='_blank' href="https://github.com/komsic/hng-test-stage1"> <h2><strong> HNG Internship Stage 1 Test</strong></h2></a> </i> <br>

      <a id="align_horizontally" target='_blank' href="https://github.com/komsic"> <img src="http://res.cloudinary.com/komsic/image/upload/v1503246162/github_logo_m0k9c5.png" alt="github" width="40px" height="40px"></a>

      <a id="align_horizontally" target='_blank' href="https://twitter.com/koms4mic"> <img src="http://res.cloudinary.com/komsic/image/upload/v1503246156/twitter_logo_xol1lk.jpg" alt="twitter" width="40px" height="40px"></a>

      <a id="align_horizontally" target='_blank' href="https://hnginterns.slack.com/team/komsic"> 
      <img id="align_horizontally" src="http://res.cloudinary.com/komsic/image/upload/v1503246232/slack_logo_jhdfzd.png"
      alt="slack" width="40px" height="40px"></a>

      <a id="align_horizontally" href="mailto:koms4mic@gmail.com"> 
      <img src="http://res.cloudinary.com/komsic/image/upload/v1503267572/gmail_logo_uneriy.jpg" alt="gmail" width="40px" height="40px"></a>
    </div>
    <div class="shadow">
      <p> Micheal is a 500 level student of Electrical and Electronics Engineering in Federal University of Agriculture, Abeokuta. He's passionate about technology and one his life goals is to become a <strong>World Class Full Stack Android Developer</strong>.</p>

      <p>Micheal enjoys watching TV series, playing soccer games, reading novels (hates romantic genre), and meditating. He used to be a fanatic football fan until Arsenal FC broke his heart.</p>
    </div>

    <div class="shadow">
      <h1>You Can Contact Me Here</h1>

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

      <form>
        <label for="subject">Subject</label><br>
          <input type="text" name="subject" placeholder="Subject...." style="width: 50%" required><br>

          <label for="message">Message</label><br>
          <textarea name="message" rows="8" cols="50" style="width: 50%" placeholder="Please Write Your Message Here...." required></textarea><br>

          <button type="submit" name="submit"> Send</button>
      </form>
    </div>
  </div>
</body>
</html>