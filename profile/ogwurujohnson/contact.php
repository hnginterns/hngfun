<?php
/**
 * Created by PhpStorm.
 * User: BlackHatJohnny
 * Date: 8/27/2017
 * Time: 5:20 PM
 **/

  if($_SERVER['REQUEST_METHOD'] == 'GET') {
      $error = [];

      $subject = $_GET['subject'];
      $to  = 'ogwurujohnson@gmail.com';
      $body = $_GET['body'];

      if($body == '' || $body == ' ') {
          $error[] = "Don't be shy. Write me a message";
      }


      if($subject == '' || $subject == ' ') {
          $error[] = 'A subject would be awesome.';
      }

      if(empty($error)) {

          $config = include('../../config.php');
          $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
          $con = new PDO($dsn, $config['username'], $config['pass']);

          $exe = $con->query('SELECT * FROM password LIMIT 1');
          $data = $exe->fetch();
          $password = $data['password'];

          $url = "../../sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

          header("location: $url");

      }
  }
 ?>

<div class="container">
    <form action="contact.php" method="GET">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="subject" name="subject" placeholder="Your last name..">



        <label for="subject">Subject</label>
        <textarea id="subject" name="body" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">

    </form>
</div>

