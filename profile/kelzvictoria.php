
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = "Email From HNG Internship form";
    $to = 'kelzvictoria@gmail.com';
    $senderName = $_POST['name'];
    $body = $_POST['message'];
    if (trim($body) == '') {
        $error[] = 'Message cannot be empty.';
    }
    if (trim($senderName) == '') {
        $error[] = 'Name cannot be empty';
    }
    if (empty($error)) {
        $config = include __DIR__ . "/../config.php";
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $conn = new PDO($dsn, $config['username'], $config['pass']);
        $statement = 'SELECT * FROM password LIMIT 1';
        $query = $conn->query($statement);
        $row = $query->fetch();
        $password = $row['password'];
        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
        header("location: $uri");
    }
}
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            box-sizing: border-box;
            overflow: none;
        }
        
        body {
            top: 0;
            font-size: 1.25rem;
            overflow: hidden;
            margin: 0px;
            font-family: 'Titillium Web', sans-serif;
        }
        
        section {
            color: #fff;
            text-align: center;
        }
        
        div {
            height: 100%;
        }
        
        article {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            padding: 15px;
        }
        
        h1 {
            font-size: 2.2em;
            margin: 0 60 0.75rem 0;
            color: rgba(12, 8, 8, 0.72);
            cursor: pointer;
        }
        h1:hover{
            color: #9B9C95;
            transition: color 2s;
        }
        /* Pattern styles */
        
        .container {
            display: table;
            width: 100%;
        }
        
        .left-half {
/*            background-color: #cfdbeb;*/
            position: absolute;
/*            left: 0px;*/
            width: 50%;
            background-repeat:no-repeat;
            background-size:cover;
            background-position: center center;
            background-attachment: fixed;
        }
        
        .left-half>img {
            height: 100% !important;
        }
        
       .right-half {
            background-color: #DDDDDD;
            position: absolute;
            right: 0px;
            width: 50%;
           overflow-y: scroll;
        }
        .about{
            color: rgba(12, 8, 8, 0.72);
        }
        
        @media (max-width: 700px) {
            body {
                overflow-y: scroll;
                overflow-x: hidden;
                background-color: #dddddd;
            }
            .right-half {
                width: 100%;
                text-align: center;
                overflow-y: inherit;
            }
            .left-half {
                top: 0;
                width: 100%;
                position: relative;
                align-items: center;
                overflow-x: hidden;
            }
            article {
                width: auto;
            }
            #form-div {
                width: auto !important;
                padding: 0px;
                margin-left: -50px;
            }
            .left-half>img {
                max-width: 100%;
                max-height: 100% !important;
            }
        }

        @media (max-width: 500px) {
            .left-half>img {
                max-width: 100%;
                height: auto !important;
            }
        }
        
        
        .icons {
            margin-top: 10px;
            text-align: center;
        }
        
        .icons ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .icons ul li:last-child {
            margin-right: 0;
        }
        
        .icons li {
            display: -webkit-inline-box;
            padding-left: 5px;
        }
        
        .icons ul li a {
            color: white;
            background-color: #582a80;
            height: 28px;
            width: 28px;
            line-height: 28px;
            display: block;
            font-size: 15px;
            opacity: 0.5;
            border-radius: 10px;
}
        
        .link {
            color: #00ffac;
            text-decoration: none;
        }
        
        .icons ul li a:hover,
        .link:hover {
/*            opacity: 1;*/
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        
        .slack {
            font-size: 28px;
            color: rgba(63, 37, 64, 0.84);
            padding-bottom: -30px;
        }
        .regInput {
            position: relative;
            z-index: 0;
            display: block;
            width: 69%;
            height: 45px;
            font-size: 14px;
            line-height: 18px;
            font-weight: 300;
            color: rgb(95, 106, 125);
            margin: 0px 0px 30px -16px;
            padding: 10px;
            background: rgb(255, 255, 255);
            outline: none;
            border: 0.2px solid rgb(196, 196, 196);
            border-radius: 3px;
            -webkit-transition: background-color 1s;
            transition: background-color 1s;
            left: 100px;
        }




        input:focus{
            background-color: transparent;
            color: black;
            border-color: white;
            outline: none;
        }
        textarea:focus{
            background-color: transparent;
            color: black !important;
            border-color: #ffffff;
            outline: none;
            resize: none;
        }
        .regInput-3 {
            position: relative;
            left: 100px;
            z-index: 0;
            width: 69%;
            height: 35px;
            font-size: 14px;
            line-height: 18px;
            font-weight: 300;
            margin: 0px 0px 30px -16px;
            padding: 10px;
            background: rgb(255, 255, 255);
            outline: none;
            border: 1px solid rgb(196, 196, 196);
            border-radius: 3px;
            color: black;
            display: block;
            -webkit-transition: background-color 1s;
            transition: background-color 1s;
            text-decoration: none !important;
        }
        .regInput-3:hover{
            background-color: #DDDDDD;
            color: #ffffff;
            text-decoration: none !important;
        }
        .regInput-1 {
            position: relative;
            z-index: 0;
            display: block;
            width: 69%;
            height: 150px;
            font-size: 14px;
            line-height: 18px;
            font-weight: 300;
            color: rgb(95, 106, 125);
            margin: 0px 0px 25px -16px;
            padding: 10px;
            background: rgb(255, 255, 255);
            outline: none;
            border: 1px solid rgb(196, 196, 196);
            border-radius: 3px;
            resize: none;
            -webkit-transition: background-color 1s;
            transition: background-color 2s;
            left: 100px;
        }

        #form-div{
            margin-left: 20px;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Victoria Kazeem | kelzvictoria</title>
    <script src="https://use.fontawesome.com/1dbde377a5.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>

<body>
    <section class="container">
        <div class="left-half">
            <img src="http://res.cloudinary.com/kelzvictoria/image/upload/v1505260077/IMG_20170212_115856_edit_edit_t4po9g.jpg" alt="kelzvictoria">
        </div>
        <div class="right-half">
            <article>
                <div class="name">
                    <h1>Victoria Kazeem</h1>

                </div>
                <p class="slack">Slack handle:@kelzvictoria</p>

                <div class="icons">
                    <ul>
                        <li><a class="instagram" href="https://www.instagram.com/kelzvictoria/"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="github" href="http://github.com/kelzvictoria"><i class="fa fa-github-alt"></i></a></li>                   
                    </ul>
                </div>
                <div class="about">
                    <p>
                        <br>Hello! I am Victoria, a Software Developer.
                        <br>I study Computer Science at the Federal University of Agriculture Abeokuta (FUNAAB).
                        <br>I am really passionate about technology and I hope to be a world-class software developer.
                    </p>
                    
                    
                    
                    <p class="slack contact">Contact me</p>

                    <div id="form-main">
                        <div id="form-div">
                            <form class="form" id="form1" action="" method= "post" >

                                <p class="name">
                                    <input type="subject" title="" class="regInput" placeholder="your subject  " >
                                </p>

                                <p class="email">
                                    <input type="email" title="" class="regInput" placeholder="email address  " >
                                </p>

                                <p class="text">
                                    <textarea class="regInput-1" placeholder=" Write that message...."></textarea>
                                </p>
                                <input type="hidden" name="password" value="<?= $password; ?>" />
                                <div class="submit">
                 
                                  <input type="submit" value="Send" class="regInput-3 text-center" name="submit" required="" />
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </article>
        </div>
    </section>

</body>

</html>
