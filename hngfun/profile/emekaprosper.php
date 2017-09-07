<?php
    if (!empty($_GET)) {
        $subject = $_GET['subject'];
        $message = $_GET['message'];

        // Retrieving password from database
        $db = 'hng';
        $pwd = '@hng.intern1';
        $username = 'intern';
        $host = 'localhost';
        $connection = mysqli_connect($host, $username, $pwd, $db)
            or die('Failed to connect to database');

        $query = 'SELECT * FROM password LIMIT 1';

        $result = mysqli_query($connection, $query)
            or die('Error Connecting to database');

        $info = mysqli_fetch_array($result);
        $pwd = $info['password'];

        $url = 'http://hng.fun/sendmail.php?password=' . $pwd . '&subject=' . $subject . '&body=' . $message . '&to=nnaemekaukpa@gmail.com';
        header("location: $url"); 

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<style type="text/css">
      @import "responsiveStyles.css";


    body {
    font-family: 'Open Sans', sans-serif; 

    background-color: teal;
    background-size: cover;
    width: 100%;
    height: 100%; 
    display: flex;
    text-align: center;
    flex-direction: column;
    align-items: center;
    align-content: space-around; 
    justify-content: center;
    margin: 0px;
    padding: 4%;
    /* overflow: hidden; */
    }

    .container {
    display: flex;
    flex-direction: row;
    align-items: center;
    align-content: space-around; 
    justify-content: center; 
    width: 50%;
    height: 60%; 
    }

    #profile {
         background: #001f3f; 
    }

    .flex-item {
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    width: 40%;
    height: 50%;
    background: #DDDDDD;
    margin: 2%;
    padding: 0px;
    border-radius: 10px;
    }

    #bio-text {
    text-align: justify !important;
    padding: 15px;
    font-size: 14px;
    }
    p .uam > a:hover{
    cursor:pointer;
    text-decoration:none !important;
    }
    img {
    width: 100%;  
    height: auto;  
    max-height: 300px;
    margin: 0px;
    }

    .heading,
    .card-footer {
    /* background: #5c6bc0;   */
    background: #001f3f;
    padding: 1px;  
    color: white;
    font-size: 20px;
    margin: 0px;
    }

    .heading {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;    
    text-transform: uppercase;
    }

    .card-footer {
    margin: 5px !important;
    } 

    .card-footer p,
    .card-footer a {
    display: inline;
     padding: 15px 0px 15px 0px; 
     color: white;
     margin: 4px;
    }

    .card-footer a:hover {
    cursor: pointer;
    }

    .card-footer > p:hover {
    cursor: default
    color:#001f3f;
    }

    .icons {
    transition: all 1s; 
    font-size: 30px !important;
    color: white;
    margin: 40px 10px 10px 10px;
    } 

    .icons:hover {
     font-size: 35px !important; 
    }

    .fa-instagram:hover {
      color: #e95950;
    }

    .fa-twitter:hover {
    color: #001f3f;
    }

    .fa-envelope:hover {
    color: #001f3f;
    }

    .fa-github:hover {
    color: #4078c0;
    }

    .fa-slack:hover {
    color: #01FF70;
    }
     .fa-android:hover {
    color: #01FF70;
    }
    h2{color:#4078c0;
        text-align: center;}

    @media only screen and (max-width: 1100px) {
    body {
        padding: 1%;
    }

    .container {
        width: 90%;
        height: 90%;
    }
    }

    @media only screen and (max-width: 800px) {
    body {
        padding: 0px;
    }

    .container {
        flex-direction: column;
        width: 100%;
        height: 100%;
    }

    .flex-item {
        width: 80%;
        height: 100%;
    }

    img {
        max-height: 400px;        
    }

    /* CONTACT FORM STYLE BEGIN */

    #contact {
    grid-column: 1/3;
    display: grid;
    grid-template-rows: 10% 90%;
    border-radius: 12px;
    margin-bottom: 60px;
    }

    form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 1em;
    width: 100%;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    }

    input {
    width: 100%;
    padding: 1em;
    font-size: 1em;
    border-radius: 3px;
    outline-style: none;
    border: none;
    background: #dedddd;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    }

    input:focus {
    background: white;
    }

    #submit {
    grid-column: 2/3;
    grid-row: 3;
    background: #42a5f5;
    color: white;
    border-bottom-right-radius: 12px;
    }

    #message {
    grid-row: 1/3;
    grid-column: 2/3;
    }

    #subject {
    border-bottom-left-radius: 12px;
    }

    /* CONTACT FORM STYLE ENDS */

    /* NOTIFICATION STYLE BEGINS */

    #notification {
    display: grid;
    align-items: center;
    align-content: center;
    justify-content: space-around;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    transition: all 2s;
    position: fixed;
    top: -20%;
    z-index: 100;
    color: white;
    font-size: 18px;
    letter-spacing: 0.06em;
    width: 100%;
    padding: 0px;
    }

    #notification p {
    grid-column: 2/4;
    padding: 20px !important;
    border-radius: 4px;
    align-self: center;
    text-align: center;
    height: auto !important;
    width: fit-content;
    }


    }
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>emekaprosper profile</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel=stylesheet href="https://s3-us-west-2.amazonaws.com/colors-css/2.2.0/colors.min.css">     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="flex-item" id="profile">
            <div class="heading">
                <p>Internship Profile</p>
            </div>
            <div>
                <img src="https://image.ibb.co/knhPSQ/IMG_20170818_203414.jpg" alt="profile picture" width="500" height="500">   
            </div>
            <div class="card-footer">
                <a href="https://github.com/emekaProsper/hnginterns-emekaProsper"><span class="fa fa-external-link"><p id="stage1">Stage 1 task</p></span></a>
                <p id="slack-username"><span class="fa fa-slack"> Slackname: </span> @emekaprosper</p> 
            </div>
        </div>
        <div class="flex-item">
            <div id="bio">
                <div class="heading">
                    <p>MY PORTFOLIO</p>
                </div>
                <p id="bio-text">
                    I am a graduate of Computer Science with Statistics from <a href="uam.edu.ng" class="uam">University of Agriculture Makurdi</a></br>
                    I have knowledge in Website Application Development comprising of 
                    <b>HTML5</b>, <b>CSS3</b> <b>JavaScript</b>, <b>Jquery</b>, <b>Php</b> <b>Twitter bootstrap</b> and learning some 
                    frameworks like <em>ReactJs, AngularJs, Laravel and VueJs.</em>
                    </br>
                    I am looking forward to using this opportunity to develop myself further via this rare opportunity of interning in this platform.
                </p>
                <div class="card-footer">
                <a href="#"><span class="fa fa-slack">Team5</span></a> 
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <a href="instagram.com//"><span class="fa fa-instagram icons"></span></a>
        <a href="https://twitter.com/hamdalofficial"><span class="fa fa-twitter icons"></span></a>
        <a href="https://hnginterns.slack.com/team/emekaprosper"><span class="fa fa-slack icons"></span></a>
        <a href="https://drive.google.com/file/d/0B2zbnkA4cCaUZW54U1ZDQllJNkE/view?usp=sharing"><span class="fa fa-android icons"></span></a>
        <a href="mailto:nnaemekaukpa@gmail.com"><span class="fa fa-envelope icons"></span></a>        
    </div>

            <h2>CONTACT ME</h2>                
            <form class="form-control" action="emekaprosper.php" method="get">
            <div class="control-group">
                <label for="email">Email</label>
              <input type="email" id="email" name="to" placeholder="example@example.com" required>
            </div>
            <div class="form-control">
                <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="Your last name.." required>
            </div>
              <div class="form-control">
                  <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
              </div>
              
              <input type="submit" id="submit" value="Send mail">
            </form>
</body>
</html>
