<?php
    if(isset($_POST['processing']) && $_POST['processing'] == true){
        echo 'here';
        if((empty($_POST['subject']) || empty($_POST['body']))){
            exit;
        }
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        $config = require($_SERVER['DOCUMENT_ROOT'] . '/config.php');
        $host = $config['host'];
        $dbname = $config['dbname'];
        // Get Password from database
        try{
            $db = new PDO("mysql:host=$host;dbname=$dbname", $config['username'], $config['pass']);
        } catch (PDOException $e){
            echo "Connection error";
        }
        
        
        $query = $db->query('SELECT * from password LIMIT 1');
        $data = $query->fetch();
        $password = $data['password'];
        header("Location: ".$_SERVER['HTTP_HOST']."/sendmail.php?password=$password&subject=$subject&body=$body&to=ksagoe@gmail.com");
        
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kay Sagoe</title>
        <style type="text/css">
            @font-face {
                font-family: Apple;
                src: url(/fonts/Apple.ttf);
            }

            div {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
    
            }

            body {
                background: #ECF0F1;
                font-family: Apple, monospace; 
            }

            h1 {
                text-align: center;
                color: #22313F;
                font-size: 58px;
            }

            img {
                display: block;
                width:300px;
                height:300px;
            }

            p {
                color: #2C3E50;
                line-height: 1.3;
                
            }

            h2 {
                color: #2C3E50;
            }

            input[type=submit] {
                display: block;
                width : 200px;
                height: 50px;
                background: #57777F;
                font-family: Apple, monospace;
                font-size: 16px;
                margin-left: auto;
                margin-right: auto;
                border: none;
                margin-top: 10px;
                color: #C8CBCC;

            }

            label {
                display: block;
                color: #34495E;
                margin-left: 10%;

            }

            .textbox{
                -moz-box-sizing: padding-box;
                -webkit-box-sizing: padding-box;
                box-sizing: padding-box;
                width: 80%;
                background: transparent;
                border: 4px solid #C8CBCC;
                margin-left: 10%;
                margin-right: 10%;
                font-size: 16px;
                font-family: Apple, monospace;
                color:#2C3E50;
                padding-left: 10px;
                padding-right: 10px;
            }

            .container {
                padding: 16px;
            }

            .infobox {
                width: 30%;
                float:left;
                margin-top: 10px;
            }

            .profile {
                margin: auto;
                border-radius: 50%;
  
            }

            .slack_box {
                text-align: left ;
                float: left;
                width: 50%;
                color: #2C3E50;
                
            }

            .git_box {
                text-align: right;
                float: left;
                width: 50%;
                color: #2C3E50;
            }

            .contact {
                width: 70%;
                float: left;
                margin-top: 10px;
                padding-left: 10px;
                
            }

            .subject {
                height: 50px;
            }

            .body {
                height: 300px;
                resize: none;
                line-height: 1.3;
            }

            .body-label {
                margin-top: 10px;
            }

        </style>
    </head>
    <body>
            <div class="container">
                    <h1>Kay Sagoe</h1>
                    <div class="infobox">
                      <img src="https://orig03.deviantart.net/b7ee/f/2017/128/1/1/profile_picture_by_pixelsparkz-db8kdf3.png" alt="profile" class="profile">
                      <p>
                        I'm a student studying Computer Science at university. I enjoy backend development, API development and database design. My preferred framework is Laravel and my preferred language for web development is PHP
                      </p>
                      <div>
                            <div class="slack_box">Slack: kay_s</div>
                            <div class="git_box">Github: kaysagoe</div>
                        </div>
                    </div>
                    <div class="contact">
                        <h2>Contact Me</h2>
                        <form action="./kay_s.php" method="post">
                            <input type="hidden" name="processing" value=true />
                            <label for="subject">Subject</label>
                            <input type="text" class="textbox subject" name="subject" id="subject" /> 
                            <label for="body" class="body-label">Message</label>
                            <textarea class="textbox body" name="body" id="body"></textarea>
                            <input type="submit" value="Send" />
                            <?php if(isset($_POST['processing'])) : ?>
                                <p>The Subject or Body field has not been entered</p>
                            <?php endif; ?>
                        </form>
                    </div>
                    
            </div>      
    </body>
</html>