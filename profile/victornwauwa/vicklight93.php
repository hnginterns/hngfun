<?php

    $config = include('../../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);

    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];

    if (isset($_GET['sendmessage'])) {

        $subject = "Hello";
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['body'])));
        $to = "victor.nwauwa93@gmail.com";

        $location = "../../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

        header("Location: " . $location);

    }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vicklight93</title>
    <style>
body{
    background-color: whitesmoke;
    font-family: helvetica;
    margin: 0 auto;
}
header{
    background-color: black;
    color: whitesmoke;
    width: 100%;
    height: 200px;
    margin: 0px;
    padding: 0px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}

#header{
        text-align: center;
        padding-top: 50px;
        
        }
.container {
    width: 80%;
margin: 0 auto;
height: 8000px

}
#con1{
    float: left;
    width: 35%;
    height: 800px;
    margin-top: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 15px -3px #333;
    border-radius: 2px;
}
#con2{
    float: right;
    width: 63%;
    height: 800px;
    margin-top: 10px;
    box-shadow: 0px 0px 10px -3px #333;
    border-radius: 2px;
    text-align: center;
}


.text{
    width: 100%;
    height: 100%;
    overflow: auto;
}

#slack{
    width: 30px;
    height: 30px;
}
#git{
    width: 30px;
    height: 30px;
}
#google{
    width: 30px;
    height: 30px;
}
        a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: white;
    background: green;
}
        .form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form-style-6 h1{
    background-color: black;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="date"],
.form-style-6 input[type="datetime"],
.form-style-6 input[type="email"],
.form-style-6 input[type="number"],
.form-style-6 input[type="search"],
.form-style-6 input[type="time"],
.form-style-6 input[type="url"],
.form-style-6 textarea,
.form-style-6 select
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
}
.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="date"]:focus,
.form-style-6 input[type="datetime"]:focus,
.form-style-6 input[type="email"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="search"]:focus,
.form-style-6 input[type="time"]:focus,
.form-style-6 input[type="url"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
    box-shadow: 0 0 5px grey;
    padding: 3%;
    border: 1px solid grey;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: black;
    border-bottom: 2px solid #30C29E;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;   
    color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: grey;
}
.text{
      padding: 5px;
        }
    </style>
</head>
<body>
<header>
    <h1 id="header">Hng Interns 2017</h1>
</header>
    <div class="container">
        <div class="con" id="con1">
                <div>
                <img style="max-height:100%; height:auto; max-width:100%; width:auto;" src="https://avatars2.githubusercontent.com/u/17924533?v=4&s=400" alt="victor's photo">
                </div>
                <div class="text">
                <h3>Nwauwa Victor Ifeanyi</h3>
                    <h3>Important links</h3>
                <div >
                    <a href="http://github.com/vicklight"><img id="git" src="https://assets-cdn.github.com/images/modules/logos_page/Octocat.png" alt="git logo">vicklight</a>
                    <br/>
                    <a href="https://hnginterns.slack.com/messages/@vicklight93"><img id="slack" src="http://tse3.mm.bing.net/th?id=OIP.Oi4x6PnTrVJ8rL2uGO09EgEsEs&pid=15.1" alt="slack logo">@vicklight93</a>
                    <br/>
                    <p><img id="google" src="https://upload.wikimedia.org/wikipedia/commons/e/e9/Google_icon.png" alt="google icon">victor.nwauwa93@gmail.com</p>
                    <br/>
                    <p>HNG Interns Stage1 <a href="https://github.com/vicklight/hotels-ng-test" class="button">git repo</a></p>
                </div>
                </div>
                </div>
        <div class="con" id="con2">
                <div>
                    <h2>Biography</h2>
                    <hr>
                    <p> I'm a final year student of Computer Science department at University of PortHarcourt in Rivers State. I am a tech lover, fast learner and very enthusiastic about learning
                    new stuff. I believe in team work and having the right information. this is major key factor in excellence.</p>
                </div>
                <div>
                    <h2>Skills</h2>
                    <hr>
                    <p>HTML, CSS, PHP, BOOTSTRAP, JAVA, ANDROID, NETWORKING.</p>
                </div>
                <div>
                    <h2>WorkXP</h2>
                    <hr>
                    <p>Volunteered for the networking unit at my school's ICT Center.where I assisted in setting up the CBT center, web developer at Bithub.</p>
                </div>
                <div class="form-style-6">
                            <h1>Fill the form</h1>
                            <form action="../../sendmail.php" method="GET">
                                <input type="hidden" name="password" value="<?= $password; ?>" >
                                <input type="text" name="name" placeholder="Your Name" />
                                <input type="email" name="email" placeholder="Email Address" />
                                <textarea name="body" placeholder="Type your Message"></textarea>
                                <input type="submit" value="Send" class="sendmessage" name="sendmessage" />
                            </form>
                    </div>
        </div>
    </div>
</body>
</html>
