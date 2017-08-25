<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'glonimi0@gmail.com';
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
  <title>Adebowale Glory | Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="adeglo.css" type="text/css"/>
  </head>
  <body>

<!-- Page Content -->

  <div>
        <p id="img">
            <img src="http://i.imgur.com/NagAUya.jpg"
             alt="my picture"/>
        </p>
        <p id="hey">NAME: ADEBOWALE GLORY</p>
        <p><a href="https://hnginterns.slack.com/messages/@adeglo">Slack</a></p>
        <p><a href="https://github.com/mystery1999">github</a></p>
        <p><a href="https://github.com/mystery1999/Stage-1">Stage1 repo</a></p>  
        <p>
            About Me: I’m from Ondo State. I’m  a 200 level, Computer
            Engineering student of Federal University of Technology, Akure.
            I love cats although I have never owned one;).
        </p>
    





    <div class="banner" id="contact">
    <div class="container">
           
            <!--contact form -->
  <h2 style="text-align: center;">Send me a message</h2>
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

  <form  method="POST" action="#">

    <div class="form-group">
      <label for="subject" class="sr-only">Subject:</label>
      <input id="subject" type="text" class="form-control" name="subject" placeholder="Subject" required>
    </div>
    
    <div class="form-group">
      <label for="message" class="sr-only">Message:</label>
      <textarea id="message" class="form-control" name="message" rows="6" cols="50" placeholder="Your Message" required></textarea>
    </div>
    <button name="submit" type="submit" class="btn btn-default">Send</button>
  </form>
  <!--/.contact form-->
         </div>

    </div>
</div
   
   </body>
</html>
