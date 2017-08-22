<?php

    if (isset($_POST['sendmessage'])) {

        $location = 'sendmail.php';
        $subject = "Hello";
        $password = "spamblocker";
        $body = htmlentities(strip_tags(trim($_GET['body'])));
        $to = "profchydon@gmail.com";

        header("Location: " . $location);

    }

 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <title>Nkwocha Chidi</title>
</head>

<style media="screen">
  * {
    padding: 0px;
    margin: 0px;
    font-family: 'Roboto Slab', serif;
  }

  body {
    background-color: #000000;
  }

  a.repo {
    text-decoration: none;
  }

  .mainbio h4 {
    line-height: 25px;
    text-align: justify;
    margin-bottom: 35px;
  }

  img.profileImage {
    width: 90%;
    border-radius: 10px;
    margin-bottom: 20px;
  }

  .MainContaner {
    margin: 0% 20%;
    background: white;
    padding: 5% 10%;
    height: auto !important;
  }

  .form-group {
    margin: 0% 20%;
    background: #000;
    padding: 30px 60px;
    height: auto !important;
  }

  h3.contactme {
    margin-bottom: 20px;
    text-align: center;
    color: #fff;
    font-size: 25px;
  }

  button.sendmessage {
    padding: 10px;
    background: #fff;
    font-size: 14px;
    font-weight: 600;
  }

  textarea {
    resize: none;
    width: 100%;
    margin: 10px 0px;
    font-size: 14px;
    padding: 4px;
  }

  input[type="email"] {
    width: 100%;
    margin: 10px 0px;
    font-size: 14px;
    padding: 4px;
  }

  input[type="text"] {
    width: 100%;
    margin: 10px 0px;
    font-size: 14px;
    padding: 4px;
  }

  .Details {
    text-align: center;
    line-height: 25px;
    margin-bottom: 25px;
  }

</style>

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
