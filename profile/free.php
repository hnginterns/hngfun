<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'free.t.1896@gmail.com';
    $body = $_POST['body'];
    $name = $_POST['name'];
    if($body == '' || $body == ' ') {
        $error[] = 'Type in something, i can not read an empty Text' ;
    }

    if($subject == '' || $subject == ' ') {
        $error[] = 'pls, Name and email required';
    }
    if(empty($error)) {
        $config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
        header("location: $uri");
    }
}
?> 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>freet96</title>
    <style>
    /* -- contact me form style starts here -- */
        .bttnstyle{color:black;
                background:gray;
                }
        .panel-footer{background-color:blue;
                    color:black;
                    height:35px;
                    width:350px;
                    border-radius:0px;
                    font-size:25px;
                    }
        .form-control{border-radius:5px;
                    width:300px;
                    height:20px;
                    }
        .form-control:focus{outline:none;
                      border-right:3px;
                      border-left:3px;
                      border:2px solid navy;
                      
                      }
        .form-group{border-radius:20px;
                    width:40px;
                    height:50px;
                    }
        #formtitle{text-align:center;
                color:black;
                font-size:20px;
                background-color:blue;
                height:26px;
                width:350px;
                border-radius:0px;
                }
        #divform{background:lightblue;
                text-align:left;
                border-bottom-left-radius:10px;
                border-bottom-right-radius:10px;
                border-top-left-radius:10px;
                border-top-left-radius:10px;    
                border-radius:10px;
                border:7px solid white;
                height:476px;
                width:350px;
                margin:auto;
                }
        #form-center{text-align:center;
                    margin:auto;

                    }
        #form{width:50px;
            height:450px;
            
            }
        .textarea{height:10px;
                width:20px;
                background:white
                }
    /* -- contact me form style ends here -- */

    /* -- my profile style starts here -- */
        h1{font-family:Times New Roman;color: blue;text-align:center;}
        .img{width:auto;
        height:auto;
        border:4px solid blue;
        border-radius:85px;
        }
        p{text-align:center}
        #center{text-align:center}
        #footer{text-align: right}
        #body{
            border-radius:20px;
            text-align: center;
            padding:20px;
            width:450px;
            height:100px;
            background:lightblue;
            margin:auto;
            margin-top:20px;
            margin-bottom:10px;
            }
    
    /* -- my profile style ends here -- */
    </style>
</head>

<body style="background-color:skyblue">
    <div id="center">
        <div style="background:lightblue; border-radius:20px;" >
            <img class="img" src="http://res.cloudinary.com/dutaffn3e/image/upload/v1504884035/11537800_758543687599634_6283110010198569855_n_1_vp0pgt.jpg"alt="freet96 image" >
            <h1>AKPAN NSIKAK</h1>
        </div>
    </div>
    <div >
        <p><strong>Slack username:</strong>free</p>
        <div id="center">
          <p id ="body"> <i><strong>BIO:</strong> I am a young, creative and vibrant. I happen to have a passion for solving problems,
            this pushed me into the engineering field of study, to my discovery software engineering offers a wide range of creative problem solving strategy,
             and i am here to fully develop my passion.</i></p> 
        </div>
    </div>
<!-- contact form -->
    <div id="form-center">
        <div id="divform">
            <div id="formtitle"><strong>Contact me</strong></div>
            <form id="form" action="free.php" method="post">
                <div class="form-group">
                            <label for="Name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control"  placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="E.mail">E.mail:</label> 
                    <input type="text" id="E.mail" class="form-control" name="E.mail" placeholder="-:e.mail"/>
                </div>
                <div class="form-group">
                            <label for="subject-of-message">Subject:</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="-: subject-of-message">
                </div>
                <p>Message: <textarea type="body"  name="body" placeholder="Type message here..." rows="10" cols="30"></textarea></p>
                <p>
                <input type="submit" value="submit" name="submit" class="bttnstyle"/>
                </p>
                <p>

                </p>
                <div class="panel-footer"> <img src="images/slack_logo.jpg" width="20px" height="20px"><b type="slack-username-text"><strong>free</strong></b></div>
            </form>
        </div>
    </div>
    <footer id="footer">&copy free.com</footer>
</body>
</html>