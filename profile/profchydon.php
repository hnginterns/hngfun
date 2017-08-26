<?php

    $config = include('../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);

    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];

    if (isset($_GET['sendmessage'])) {

        $subject = "Hello";
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['body'])));
        $to = "profchydon@gmail.com";

        if (!isset($body) || $body == '' || (!isset($_GET['name'])) || $_GET['name'] == '' ) {

            echo "Form cannot be blank";

        }else {

            $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

            header("Location: " . $location);


        }


    }

 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/chidi.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <title>Nkwocha Chidi</title>
</head>

<body>

    <div class="MainContaner">
      <img src="image/chidi.jpg" class="profileImage" alt="">

      <div class="Details">
        <h4>Name: Nkwocha, Chidi Callistus</h4>
        <h4><span class="fa fa-slack"></span></i> profchydon</a> </h4>
        <h4><span class="fa fa-github"></span></i> <a target="_blank" href="https://github.com/profchydon/" class="repo"> profchydon</a></h4>
        <h4><a target="_blank" href="https://github.com/profchydon/getting-started-h2-2017" class="repo"> Stage 1 repo</a></h4>
      </div>

      <div class="mainbio">
        <h4>My name is Chidi Nkwocha, and i am a native of Ngor Okpala LGA, Imo State. Currenntly a 500 level student of the department of computer science univeristy of uyo. I love singing.</h4>
      </div>

    </div>

    <div class="form-group">

        <h3 class="contactme">CONTACT ME</h3>

        <form class="" action="" method="get">

          <div class="row">
              <label for="name">Name</label><br>
              <input type="text" name="name" value="Enter Your name">
          </div>

          <div class="row">
              <label for="email">Email</label><br>
              <input type="email" name="email" value="Enter Your email">
          </div>

          <div class="row">
            <label for="message">Message</label><br>
            <textarea name="body" rows="8" cols="80" placeholder="Type your message here"></textarea>
          </div>

          <button type="submit" name="sendmessage" class="sendmessage">Send Message</button>

        </form>

    </div>

  </div>

</body>

</html>
