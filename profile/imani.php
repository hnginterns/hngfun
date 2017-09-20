<?php
    if(isset($_POST['process'])){
        $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=bee_moi@zoho.com");
    }else{
//         header("location: imani.html");
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            top: 0;
            font-size: 1.25rem;
            margin: 0px;
            font-family: 'Josefin Sans', sans-serif;
            overflow: hidden;
        }
        
        section {
            color: black;
            text-align: center;
        }
        
        div {
            height: 100%;
        }

        article.about {
            left: 50%;
            width: 100%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
        }

        h1 {
            font-size: 2.2em;
            margin: 30px 0px 0.75rem 0;
            color: rgba(12, 8, 8, 0.72);
            cursor: pointer;
        }
        h1:hover{
            color: #9B9C95;
            transition: color 2s;
        }
        
        .container {
            display: table;
            width: 100%;
        }
        
        .left-half {
            position: absolute;
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
            background-color: #EBDCCB;
            position: absolute;
            right: 0px;
            width: 50%;
           overflow-y: scroll;
           }
        /*.about{*/
            /*color: rgba(12, 8, 8, 0.72);*/
            /*line-height: 1.46;*/
        /*}*/

        @media (max-width: 700px) {
            body {
                overflow-y: scroll;
                overflow-x: hidden;
                background-color: #EBDCCB;
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
        .imani {
            padding: 10px;
            color: rgb(0, 0, 0);
            line-height: 29px;
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
        input, textarea {
    width:439px;
    height:27px;
    background:#efefef;
    border:1px solid #dedede;
    padding:10px;
    margin-top:3px;
    font-size:0.9em;
    color:#3a3a3a;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
        
        textarea {
    height:213px;
}

input[type="submit"] {
    width:127px;
    height:38px;
    text-indent:5px;
    border:50px;
    margin-top:20px;
    cursor:pointer;
    opacity:.8;
    background-color: #ff0000
    }
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
            background-color: #423636;
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
    <title>Tolu Faith | imani</title>
    <script src="https://use.fontawesome.com/1dbde377a5.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
</head>

<body>
    <section class="container">

        <div class="left-half">
            <img src="http://res.cloudinary.com/imani/image/upload/v1503842556/Hm02qoRY_xkyl99.jpg" alt="imani's image">
        </div>

        <div class="right-half">
            <article>
                <!--<img class="img-circle" src="http://res.cloudinary.com/imani/image/upload/v1503333886/Hm02qoRY_n9k714.jpg">-->
                <div class="name">
                    <h1>Tolu Faith</h1>

                </div>
                <p class="slack">Slack handle :@imani</p>

                <div class="icons">
                    <ul>
                        <li><a class="twitter" href="http://twitter.com/@amtolufaith"><i class="fa fa-twitter"></i></a></li>                   
                        <li><a class="github" href="http://github.com/ToluImani"><i class="fa fa-github-alt"></i></a></li>
                   
                    </ul>
                </div>
                <div class="about">
                    <p class="imani">I am a Front End Enthusiast.
                        <br>FrontEnd Learner | UI Learner.
                        <br>I study Computer Science in Federal University of Agriculture Abeokuta [FUNAAB].
                    </p>


                    <p class="slack contact">Contact me</p>
        <form  action="imani.php" method="post" >   
        
    <p><label>Email:</label>
        <input type="email" id="to" name="to" placeholder="Type Here"></p>

    <p><label>Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="Type Here"></p>
            
    <p><label>Message:</label>
        <textarea id="body" name="body" placeholder="Type Here""></textarea></p>
            
            <p><input type="submit" name="process" value="Submit"></p>
        
</form>
                        </div>
                    </div>






                </div>
                    


            </article>
        </div>

    </section>
</body>

</html>