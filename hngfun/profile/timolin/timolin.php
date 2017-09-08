<?php

if (isset($_GET['submit'])) {

    if (isset($_GET['body']) && isset($_GET['subject'])) {
        $email = "fabrobocomx@gmail.com";//$_GET['to'];
        $subject = $_GET['subject'];
        $body = $_GET['body'];
    } else {
        die("Invalid request. Please try again");
    }


    // DB connection
    $config = include('../../config.php');
    // $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    // $con = new PDO($dsn, $config['username'], $config['pass']);

    //var_dump($config);
    $db_name = $config["dbname"];
    $db_pass = $config["pass"];
    $db_username = $config["username"];
    $db_host = $config["host"];
    //var_dump($db_name.$db_pass.$db_username.$db_host);
    $db = new mysqli($db_host, $db_username, $db_pass, $db_name);

    if ($db->connect_errno) {
    // trigger_error('Connection Failed!', E_USER_ERROR);
    die("Connection failed ". $db->connect_error);
    }

    // Fetch password from DB
    $query = $db->query('SELECT * FROM password LIMIT 1');
    $data = $query->fetch_assoc();
    $password = $data['password'];


    $query_string = http_build_query(array('password' => $password, 'subject' => $subject, 'body' => $body, 'to' => $email));
    $result = file_get_contents('http://hng.fun/sendmail.php?'. $query_string);

    if ($result != false) {

    header("Location: http://hng.fun/profile/timolin/timolin.php?message=Email was Sent Successfully");
    exit();
    
    } else {
    die("Something went wrong");
    }
} else {

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Timothy Onyiuke - HNG Intern</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    #main {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    background-color: #ffffff;
    min-height: 600px;
    overflow: auto;
    padding: 10px 10px 10px 25px;
    border-radius: 5px;
}

.success {
    background-color: #5cb85c; color:#ffffff; padding: 10px; border-radius: 5px;
}

.success a {
    background-color: #4453BF; color:#ffffff; padding: 5px; border-radius: 2px; text-decoration: none;
}

.sec1 {
    float: left;
    overflow: hidden;
    margin-right: 30px;
}

.sec2 {
    padding-left: 50px;
    padding-right: 50px;
    overflow: hidden;
    font-family: Sofia;
    display: inline;
}

.img_social {
    font-family: Sofia;
    display: inline;    
    /* display: inline-flex; */
    /* clear: both; */
}

.contact_form {
    display: inline;
}

.form_input {
    display: inline;
}

.inputs {
    display: inline;
}

.img_social p a {
    text-decoration: none;
    border-radius: 5px;
    border: 1px #ffffff solid;
    background-color: #000000;
    color: #ffffff;
    padding: 5px 10px 5px 10px;
    margin-left: 10px;
    /* display: inline-flex; */
    /* clear: both; */
}

.stage1 {
    text-decoration: none;
    border-radius: 5px;
    border: 1px #ffffff solid;
    background-color: #000000;
    color: #ffffff;
    padding: 5px 30px 5px 30px;
    margin-left: 10px;
    font-family: Sofia;
}

body {
    background-color: #660066;
}

@keyframes fa-blink {
    0% {
        opacity: 1;
    }
    25% {
        opacity: 0.25;
    }
    50% {
        opacity: 0.5;
    }
    75% {
        opacity: 0.75;
    }
    100% {
        opacity: 0;
    }
}

.fa-blink {
    -webkit-animation: fa-blink .75s linear infinite;
    -moz-animation: fa-blink .75s linear infinite;
    -ms-animation: fa-blink .75s linear infinite;
    -o-animation: fa-blink .75s linear infinite;
    animation: fa-blink .75s linear infinite;
}

@media (min-width: 768px) {
    #main {
        width: 750px;
    }
}

@media (min-width: 992px) {
    #main {
        width: 970px;
    }
}

@media (min-width: 1200px) {
    #main {
        width: 1170px;
    }
}
</style>
</head>

<body>
    <div id="main">
        <div>
        <?php if (isset($_GET['message'])) { echo "<p class=\"success\">". $_GET['message'] . "<a href=\"http://hng.fun/profile/timolin/timolin.php\"> Reload Page</a></p>";} ?>
        </div>
        
        <div class="sec1">
            <div class="img_social">
                <img src="https://ca.slack-edge.com/T3QLSP8HM-U3QNGSAG6-697679e5ab65-192" alt="Timolin">
                <p><i class="fa fa-facebook fa-lg fa-fw" aria-hidden="true"></i><a href="https://facebook.com/timmy.onyiuke">Timmy Onyiuke</a></p>
                <p><i class="fa fa-twitter fa-lg fa-fw" aria-hidden="true"></i><a href="https://twitter.com/fabrobo_">fabrobo_</a></p>
                <p><i class="fa fa-github fa-lg fa-fw" aria-hidden="true"></i><a href="https://github.com/fabrobocom">fabrobocom</a></p>
                <p><i class="fa fa-slack fa-lg fa-fw" aria-hidden="true"></i><a href="https://hnginterns.slack.com/team/timolin">timolin</a></p>
            </div>
            
        </div>
        <div class="sec2" style="">
            <p>I'm Timothy Onyiuke, Mid-Level Web developer. I code mostly in PHP/Laravel.</p>
            <p>Though, I spend most of my time learning about stuff I like, mostly Science..<i class="fa fa-cog fa-spin fa-fw" aria-hidden="true"></i> and of course, Coding <i class="fa fa-terminal fa-blink" aria-hidden="true"></i> :). I'm quite curious
                and I like to think of myself as someone on a mission, I love Chess and Soccer.</p>

            <p><a href="https://github.com/fabrobocom/HNG" class="stage1">Stage 1</a></p>
            <p><a href="https://www.dropbox.com/s/21biq8u46w4exe8/timi.apk?dl=0" class="stage1">Download My Personal App</a></p>
        </div>
        <div class="row">
            <div class="">
                <h4>Contact Form</h4>
                <div class=""></div>
                <form id="contact-form" class="contact-form" method="GET" action="timolin.php">
                        <div class="inputs">
                            <!-- <div class="">
                                <input type="text" class="form-input" name="subject" required="required" placeholder="Subject">
                            </div> -->
                            <div class="inputs">
                           <p> <input type="text" class="form-input" name="subject" required="required" placeholder="Subject"></p>
                                <textarea name="body" id="message" required="required" class="form-input" rows="8" placeholder="Message"></textarea>
                                <button type="submit" name="submit" class="">Send Message</button>
                            </div>
                            <!-- <div class="">
                                <button type="submit" class="">Send Message</button>
                            </div> -->
                        </div>
                </form>
                <br><br>
            </div><!--/.-->
        </div>
    </div>

</body>

</html>