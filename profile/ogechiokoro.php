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
        $to = "oogehchris@gmail.com";

        if (!isset($body) || $body == '' || (!isset($_GET['name'])) || $_GET['name'] == '' ) {

            echo "Form cannot be blank";

        }else {

            $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

            header("Location: " . $location);


        }


    }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .heading {
  background-color: #104e80;
  height:150px;
  padding-top:10px;
}
.image {
  max-width:200px;
  width:169px;
  display:block;
  margin-left:auto;
  margin-right:auto;
  margin-top:57px;
  border-radius:50%;
  border:2px solid #f8f8f8;
}
.details {
  margin-top:120px;
  text-align:center;
  color:#444444;
  font-weight:normal;
}
.big {
  font-size: 24px;
  padding: 30px 0px;
}

.small {
  font-size: 16px;
}
.links {
  background-color: #ffffff;
  margin: 70px auto 0 auto;
  text-align: center;
  padding:30px;
  width:75%;
}
a {
  padding: 10px 20px;
  border-radius:5px;
  color:#ffffff;
  text-decoration:none;
  font-size:17px;
}

.info {
  background-color:#104e80;;

}

.warning {
  background-color:#ffd54f;
}
body {
    margin:0;
    padding:0;
    background-color:#d9d9d9;
    font-family:Arial, Helvetica sans-serif;
}
.content {
  text-align:center;
  background-color: #ffffff;
  margin: auto;
  text-align: center;
  margin-bottom: 40px;
  padding:30px;
  width:75%;
}
code {
  color:#f44336;
  background-color:#d9d9d9;
  padding:2px 4px;
  border-radius:5px;
  font-weight:bold;
}
.github{
  margin-left: 43%;
}
.slack{
  margin-left: 43%;
}
.text-primary{
  color:#f44336;
}

.top{
  font-weight: lighter;
}
.profile{
  color:white;
  font-size: 20px;
  border-left: 5px solid #eee;
  text-align: center;
}

img.profileImage {
    width: 17%;
    text-align: center;
    position: absolute;
    left: 550px;
    top: 60px;
    /* margin-bottom: 74px; */
}

input[type="text"] {
    width: 50%;
    padding: 5px;
    margin: 10px 0px;
}

input[type="email"] {
  width: 50%;
  padding: 5px;
  margin: 10px 0px;
}

textarea {
    width: 50%;
    margin: 10px 0px;
}

.form-group {
    text-align: center;
    margin-bottom: 40px;
}

    </style>
</head>

<body>
    <div class="heading">
        <div class="profile top"><span class="text-primary">Profile  &nbsp|</span> &nbsp Ogechi Okoro</div>
        <img src="image/ogechi.jpg" class="profileImage" alt="">
    </div>

    <div class="details">
        <p class="big">Okoro, Ogechi Christopher</p>
    </div>

    <div class="content">
        <p class="big">I'm an aspiring web designer/developer based in Uyo. I develop interest while I was undergoing my industrial training program at Start Innovation Hub, Uyo.
            <br /> "Determination today leads to <code>success</code>tommorrow" </p>
        <a href="https://github.com/ogechiokoro/intern_hng" class="info">View <code>Stage 1</code> Repository</a>
        <br>
        <br>
        <div class="github"><img src="./images/github.png" width="30" style="float: left;">
            <p class="light text-white" style="float:left;margin-top:5px;font-size: 14px">@ogechiokoro</p>
        </div>
        <br>
        <br>
        <div class="slack" style="float: left;"><img src="./images/slack.png" width="30" style="float: left;">
            <p class="light text-white" style="float:left;margin-top:5px;font-size: 14px">@ogechiokoro</p>
        </div>
    </div>

    <div class="form-group">

        <h3 class="contactme">CONTACT ME</h3>

        <form class="" action="" method="get">

          <div class="row">
              <input type="text" name="name" value="Enter Your name">
          </div>

          <div class="row">
              <input type="email" name="email" value="Enter Your email">
          </div>

          <div class="row">
            <textarea name="body" rows="8" cols="80" placeholder="Type your message here"></textarea>
          </div>

          <button type="submit" name="sendmessage" class="sendmessage">Send Message</button>

        </form>

    </div>
</body>

</html>
