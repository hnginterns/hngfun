<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Femi Ojo</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .card {
      max-width: 600px;
      margin: auto;
      text-align: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      overflow: hidden !important;
      background-color: #e6e6e6
    }

    .container {
      margin: 0 auto;
      max-width: 1170px;
      padding: 0 20px;
      width: 100%;
      box-sizing: border-box;
    }

    h1 {
      font-size: 68px;
      font-weight: normal;
      margin: 0;
    }

    h3 {
      font-style: italic;
      margin-bottom: 0;
      font-weight: normal;
    }

    .title {
      color: grey;
      font-size: 20px;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .social {
      text-decoration: none;
      margin-top: 0;
    }

    p {
      font-size: 18px;
    }

    ul {
      text-align: left
    }

    #profile-image {
      border-radius: 6px;
    }

    #email {
      border: 0.5px dotted #888;
    }

    input,
    textarea,
    select,
    button {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-color: #000;
    }

    #email{
      margin: 5px auto 10px;
    }

    #email-form-name,
    #email-form-fromAddress,
    #email-form-emailMessage {
      width: 90%;
      height: auto;
      margin: 5px auto 10px;
      padding: 10px;
      background: #fff;
      border: 2px solid #ccc;
    }

    #email-form-submit {
      color: #fafafa;
      padding: 10px;
      float: right;
      cursor: pointer;
      background-color: #666;
      border: none;
    }
  </style>
</head>

<body>
  <div class="card">
    <h1>Femi Ojo</h1>
    <h3 class="social">Connect with me...
      <br>
      <a href="https://twitter.com/mrfojo" target="_blank"><i class="fa fa-twitter"></i></a>
      <a href="https://www.linkedin.com/in/olorunfemi-ojo-393a7535/" target="_blank"><i class="fa fa-linkedin"></i></a>
      <a href="https://github.com/mrfojo" target="_blank"><i class="fa fa-github"></i></a>
      <a href="https://hnginterns.slack.com/team/mrfojo" target="_blank"><i class="fa fa-slack"></i></a>
      <a href="#email"><i class="fa fa-envelope"></i></a>
    </h3>
    <br>
    <img src="http://i.imgur.com/OavH6EV.png" alt="Me" id="profile-image">
    <div class="container">
      <p class="title">Lagos, Nigeria</p>
      <p>Fullstack C# Developer.
        <br>Microsoft <i class="fa fa-windows"></i> Enthusiast.
        <br>Enjoy debugging code, taking long walks and watching TV shows.
        <br>Interested in machine learning and image processing
      </p>
      <ul>
        <li>
          <a href="https://github.com/MrFojo/hngStage1" target="_blank">Stage 1</a>
        </li>
      </ul>
      <div id="email">
        <h4>Send Me An Email</h4>
        <form name="email-form" action="" method="post">
          <input id="email-form-name" name="name" placeholder="Name" size="30" type="text" value="" />
          <br>
          <input id="email-form-fromAddress" name="fromAddress" placeholder="Email Address" size="30" type="text" value="" />
          <br>
          <textarea cols="25" id="email-form-emailMessage" name="emailMessage" placeholder="Message" rows="5"></textarea>
          <br>
          <input id="email-form-submit" type="submit" name="submit" value="Send">
          <br>
          <div style="text-align: center; width: 100%;">
            <br />
            <div id="email-form-error-message">
            </div>
            <div id="email-form-success-message">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<?php
  if(isset($_POST['submit'])){
    console_log($_POST);
    $to = "femiojo24@gmail.com";
    $from = $_POST['fromAddress'];
    $subject = "Hi from " .$from;
    $message = $_POST['emailMessage'];
    //if(isset($from) && isset($message)){

      $config = include __DIR__ . "/../config.php";
      console_log($config);

      $servername = "localhost";
      $username = "root";
      $password = "root";  
      $dbname = "test";
      // $servername = $config->host;
      // $username = $config->username;
      // $password = $config->password;  
      // $dbname = $config->dbname;  
  

      $conn = new mysqli($servername, $username, $password, $dbname);

      if($conn->connect_error){
        console_log("Connection failed: ". $conn->connect_error);
        return;
      }
      console_log("Connected successfully");
      $sql = "SELECT * FROM test LIMIT 1";
      $result = $conn->query($sql);
      console_log($result);
      $emailPassword = "";
      if(!$result){
        console_log("No record found");
      }
      else{
        if($row = $result->fetch_assoc()) {
          $emailPassword = $row["password"];
          $requestUrl = "/sendmail.php?password=$emailPassword&subject=$subject&body=$message&to=$to";
          header("Location: $requestUrl");
        }
      }
      console_log("echoed");
    }
  
  function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

?>