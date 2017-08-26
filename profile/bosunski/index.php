<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'bosunski@gmail.com';
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
  <meta charset="utf-8">
  <style media="screen">
  body {
    font-family: 'Slabo 27px', serif;
    background: #f6f6f6;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: auto;
    text-align: center;
    padding-bottom: 20px;
  }

  .container {
    padding: 0 16px;
  }

  .title {
    color: grey;
    font-size: 18px;
  }

  button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }

  a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }

  button:hover, a:hover {
    opacity: 0.7;
  }

  .line {
    max-width: 400px;
    margin-bottom: -20px;
    margin-top: -10px;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  }

  h1 {
    margin-bottom: -15px;
  }

  .bosunski-label {
    display: block;
    margin-top:20px;
    text-align: left;
    font-weight: 400;
  }

  form {
    margin: 0 auto;
    max-width: 400px;
  }

  input, textarea {
    width: 380px;
    height: 27px;
    background: #efefef;
    border: 0.5px solid #dedede;
    padding: 10px;
    margin-top: 3px;
    font-size: 0.9em;
    color: #3a3a3a;
  }

  textarea {
    height: 213px;
  }

  input:focus, textarea:focus {
    border: 1px solid  #97d6eb;
  }

  #bosunski-submit {
    width: 127px;
    height: 37px;
    border: none;
    background-color: #3c3c3c;
    margin-top: 20px;
    cursor: pointer;
    font-size: 12px;
    text-transform: uppercase;
    text-align: center;
  }

  #bosunski-submit:hover {
    opacity: .9;
  }

  @@media query {

  }

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  <title>Olatunbosun Gabriel | Profile</title>
</head><body>
  <div>
    <div class="card">
      <img src="http://i.imgur.com/TAaP38Y.jpg" alt="Olatunbosun Gabriel" style="width:100%">
      <div class="container">
        <h1>Olatunbosun Gabriel</h1>
        <p class="title" style="margin-bottom:-15px;">
          <span class="fa fa-slack"></span> Slack: @bosunski
        </p>
        <p class="title">
          <span class="fa fa-github"></span> <a href="https://github.com/bosunski/hngstart" target="_blank"> Stage 1 task</a>
        </p>
      </div>
      <hr class="line">
      <div class="container">
        <h1>My Biography</h1>
        <p>
          Olatunbosun was born in Ilora in Oyo State over 20 years ago into a family of 6. He graduated from Olivet Baptist High school Oyo.
          He's currently studying Electrical and ELectronics Engineering in Federal university of Agriculture, Abeokuta and aspiring to build a
          huge tech company in the future. Olatunbosun is very passionate about technology, the cling to tech stuffs and materials are natural for him
          as this was reflected in him when he started learning how to build websites on his own, years ago. With self motivation he pursued learning as much as possible
          in this area.
          Olatunbosun, in his leisure time, love playing games or watching movies or gisting with friends(loves this alot).
          He also runs weekly Bible  studies currently in school, where he brings people together to share Jesus!
        </p>
      </div>
      <hr class="line">
      <div class="container">

        <h1>Contact Me</h1>
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
        <form class="bosunski_form" action="#" method="POST">
          <label for="subject" class="bosunski-label">Subject</label>
          <input id="subject" type="text" name="subject" placeholder="Subject" required>

          <label for="message" class="bosunski-label">Your Message</label>
          <textarea id="message" name="message" rows="8" cols="50" placeholder="Your Message" required></textarea>

          <button type="submit" name="submit" id="bosunski-submit"> Send Message</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
