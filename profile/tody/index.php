<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="font-awesome.min.css">
  <title>Profile | Tolu Yussuff</title>
  <style>
    html, body {
      background: rgb(86, 204, 242);
      margin: 0;
      padding: 0;
      font-family: Roboto;
      box-sizing: content-box;
    }

    p {
      margin: 0;
      padding: 0;
    }

    .t-container {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .profile-card {
      width: 340px;
      height: 385px;
      margin: 100px 25px 25px 25px;
    }

    .card-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background: url(https://github.com/to-dy/test/blob/master/exImg/tody1.jpg?raw=true), #FFFFFF;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      box-shadow: 0 1.5px 4px rgba(0, 0, 0, 0.25);
      position: absolute;
      top: -17.56%;
      border: 1px solid white;
    }

    .card-body {
      width: 340px;
      height: 385px;
      background: #F2F2F2;
      box-shadow: 0.5px 2px 3px rgba(0, 0, 0, 0.25);
      border-radius: 7px;
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .name {
      position: absolute;
      font-weight: bolder;
      line-height: normal;
      font-size: 24px;
      top: 25%;
      color: #000000;
    }

    .title {
      position: absolute;
      top: 35%;
      font-weight: 300;
      line-height: normal;
      font-size: 14px;
    }

    .text {
      position: absolute;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 15px;
      text-align: center;
      font-weight: 300;
      top: 45%;
      padding: 4px;
    }

    .i {
      padding-top: 10px;
      font-size: 12px;
      font-family: sans-serif;
      font-style: italic;
    }

    .task {
      position: absolute;
      top: 65%;
      font-size: 13px;
    }

    a {
      text-decoration: none;
      color: #000;
    }

    .social {
      position: absolute;
      top: 80%;
      /*font-size: 12px;*/
    }

    .social ul {
      display: inline-flex;
      align-items: center;
      list-style-type: none;
      padding: 0;
    }

    .social a {
      padding: 0 5px 0 5px;
      color: #242424;
    }


    /******* Contact form **********/

    .contact-form {
      width: 400px;
      height: 430px;
      background: #F2F2F2;
      border-radius: 10px;
      margin: 50px 25px 0 25px;
      box-shadow: 0.5px 2px 3px rgba(0, 0, 0, 0.25);
    }

    .form-title {
      font-family: Ubuntu;
      font-style: normal;
      font-weight: bold;
      line-height: normal;
      font-size: 20px;
      padding: 20px 0 10px 15px;
      width: 130px;
      margin-right: auto;
      margin-left: auto;
    }

    .form-area {
      max-width: 320px;
      padding: 20px;
      margin-right: auto;
      margin-left: auto;
    }

    input[type=text], input[type=email] {
      width: 100%;
      padding: 5px 4px;
      margin: 10px 0;
      background-color: transparent;
      border: 0;
      border-bottom: 2px solid #242424;
      font-family: Roboto;
      font-size: 12px;
      display: inline-block;
    }

    input[type=text]:focus, input[type=email]:focus {
      outline: none;
      border-bottom: 2px solid #56CCF2;
    }

    textarea {
      resize: none;
      width: 100%;
      height: 80px;
      padding: 10px 0 10px 12px;
      border: 0;
      border-bottom: 2px solid #242424;
      background-color: transparent;
      font-family: Roboto;
      font-size: 12px;
    }

    textarea:focus {
      outline: none;
      border-bottom: 2px solid #56CCF2;
    }

    input[type=submit] {
      background-color: white;
      color: black;
      font-family: Roboto;
      font-size: 14px;
      border: 2px solid #242424;
      border-radius: 5px;
      padding: 5px 15px;
      text-decoration: none;
      margin: 10px 2px;
      cursor: pointer;
      float: right;
      background: transparent;
    }

    input[type=submit]:hover {
      border: 2px solid #56CCF2;
      color: #56CCF2;
      background: transparent;
    }

  </style>
</head>
<body>
  <div class="t-container">

    <div class="profile-card">
      <div class="card-body">

        <div class="card-img"></div>
        <div class="name">Toluwalope Yussuff</div>
        <div class="title">Software Developer | Student</div>
        <div class="text">
          <p>Gradually finding my way in software development.</p>
          <p class="i">Constantly learning...</p>
        </div>
        <div class="task">
          <p>Stage 1 <span class="fa fa-external-link"><a href=""> GitHub </a></span></p>
        </div>
        <div class="social">
          <ul>
            <li><a href="https://www.linkedin.com/in/toluyussuff" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
            <li><a href="https://github.com/to-dy" target="_blank"><i class="fa fa-github fa-lg"></i></a></li>
            <li><a href="https://twitter.com/todywa" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li><a href="https://hnginterns.slack.com/team/tody" target="_blank"><i class="fa fa-slack fa-lg"></i></a></li>
            <li><a href="https://facebook.com/todywa" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
            <li><a href="https://intagram.com/todywa" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
          </ul>
        </div>

      </div>
    </div>


    <form class="contact-form" action="hng.fun/sendmail.php" method="post">
      <div class="form-title">Contact Me</div>
      <div class="form-area">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value=""  required>

        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" value="" required>

        <label for="body">Message</label>
        <textarea name="body" id="body" rows="5" cols="50" required=""></textarea>

        <input type="submit" name="send" value="SEND">
      </div>
    </form>

  </div>


</body>
</html>
