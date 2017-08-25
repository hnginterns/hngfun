<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okwu Joscelyn Kinikachi</title>
    <style type="text/css">
      body{
        width: 100%;
        background-image: url(https://avatars0.githubusercontent.com/u/24799435?v=4&s=400);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        font-family: "Arial", Verdana, sans-serif;
      }
      a{
        text-decoration: none;
        color: green;
        font-size: 1rem;
        cursor: pointer;
      }
      a:hover{
        color: #adabab;
      }
      strong{
        color: green;
        font-size: 1rem;
      }
      .container{
        width: 500px;
        margin: 10px auto;
        padding: 20px 5px 20px 5px;
        height: auto;
        text-align: center;
        box-shadow: 0px 2px 0px 2px #efefef;
        background: #ffffff;
      }

      .img{
        width: 200px;
        height: 200px;
        margin: 0px auto;
        padding: 10px;
        background: #ffffff;
        box-shadow: 0px 1px 0px 1px #efefef;
      }
      .img > img{
        height: 100%;
        width: 100%;
      }
      .details{
        width: 80%;
        margin: 0px auto;
      }
      .details > h2{
        color: #adabab;
        text-transform: uppercase;
      }
      .details > p{
        font-size: 1.1rem;
      }
      .contact_form{
        text-align: left;
      }
      .contact_form > label{
        font-size: 1rem;
        font-weight: 600;
      }
      .contact_form > input, .contact_form > textarea{
        width: 95%;
        margin-bottom: 10px;
        margin-top: 5px;
        padding-left: 15px;
        border-radius: 5px;
        border: 1px solid #ababab;
      }
      .contact_form > input{
        height: 30px;
      }
      .contact_form > textarea{
        height: 90px;
      }
      .contact_form > button{
        height: 35px;
        width: 150px;
        border-radius: 5px;
        border: none;
        background-color: green;
        color: #ffffff;
        font-size: 1rem;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
      <div class="container">
          <div class="img"><img src="https://avatars0.githubusercontent.com/u/24799435?v=4&s=400" alt="Okwu Joscelyn"/></div>
          <div class="details">
            <h2>Okwu Joscelyn Kinikachi</h2>
            <h4><img class="icn" src="http://iosicongallery.com/img/512/slack-2014.png" alt="slack" height="20" width="20"> HNG Slack Username: <strong>@joscelyn56</strong></h4>
            <h4><img class="icn" src="https://image.flaticon.com/icons/svg/25/25231.svg" alt="github" height="20" width="20"> Github: <a href="https://github.com/joscelyn56">@joscelyn56</a></h4>
            <h4><img class="icn" src="https://upload.wikimedia.org/wikipedia/commons/e/e9/Google_icon.png" alt="gmail" height="20" width="20"> Email: <strong>ojk564@gmail.com</strong></h4>
            <h4><img class="icn" src="https://image.flaticon.com/icons/svg/25/25231.svg" alt="github" height="20" width="20"> HNG Internship Stage 1 Link: <a href="https://github.com/joscelyn56/hng">https://github.com/joscelyn56/hng</a></h4>
            <h2>Biography</h2>
            <p>I am almost a graduate of computer science from the university of port harcourt, being held back by the on-going strike. Rivers boy. I believe in having the right information as this keeps you ahead. I love tech, and am passionate about it. to know more, contact me personally</p>
            <h2>Skills</h2>
            <p>Java, PHP, Laravel, HTML, CSS, Javascript</p>
            <h2>Contact Me</h2>
            <?php
              $config = include('../config.php');

              $servername = $config['host'];
              $passwordDb= "";

              try {
                  $conn = new PDO("mysql:host=$servername;dbname=".$config['dbname'], $config['username'], $config['pass']);
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $sql = $conn->prepare("SELECT * FROM password LIMIT 1"); 
                  $sql->execute();
                  $result = $sql->fetch();
                  $passwordDb = $result['password'];
              }
              catch(PDOException $e)
              {
                  echo "Connection failed: " . $e->getMessage();
              }
            ?>
            <form class="contact_form" action="http://hng.fun/sendmail.php" method="GET">
              <label>Subject</label><br>
              <input type="text" name="subject" required="true"><br>
              <label>Body</label><br>
              <textarea name="body" required="true"></textarea><br>
              <input type="text" name="to" value="ojk564@gmail.com" hidden readonly><br>
              <input type="text" name="password" value="<?php echo $passwordDb; ?>" hidden readonly><br>
              <button type="submit">Submit</button>
            </form>
          </div>
      </div>
  </body>
</html>
