<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'ogwurujohnson@gmail.com';
    $body = $_POST['body'];

    if($body == '' || $body == ' ') {
      $error[] = "Don't be shy. Write me a message";
    }


    if($subject == '' || $subject == ' ') {
      $error[] = 'A subject would be awesome.';
    }

    if(empty($error)) {

      $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

      header("location: $url");

    }
  }
 ?>
<div class="form">
        <form action="index.html" method="POST">
          <fieldset>
              <legend>Email Me!</legend>
              
                  <label>To :   </label><input name="to" id="to" class="dannys-input" value="ogwurujohnson@gmail.com" required><br>
                  <label>From : </label><input name="customer_mail" id="customer_mail" class="dannys-input" placeholder="Your E-mail" required> <br>
                 <label>Subject :</label><input name="subject" id="subject" class="dannys-input" required><br>
                  <label>Body: </label><br>
                <textarea id="body" name="body" cols="50" rows="5" required></textarea>
              <br>
              <button type="submit" class="submit-btn" name="thisemail"><strong>Send</strong></button>
          </fieldset>
        </form>
      </div> 

