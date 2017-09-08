<!DOCTYPE html>

<!--before php summon-->

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'artofofiare@yahoo.com';
    $body = $_POST['commentbox'];
    if($body == '' || $body == ' ') {
        $error[] = 'You have to TYPE in something to tell me something';
    }

    if($subject == '' || $subject == ' ') {
        $error[] = 'Your name and email are very important, TYPE them in';
    }
    if(empty($error)) {
        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
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

<!-- after php summon -->

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ofiare David | profile of artofofiare</title>
<style type="text/css">

@charset "utf-8";
/* CSS Document for artofofiare */

@import url(http://fonts.googleapis.com/css?family=Open+Sans);

html {
    height: 100%;
    
}

body {
  background-color: #fff;
  max-width: 1920px;
  min-width: 960px;
  background-color:#fff;
  margin: 1.5em 0;
  font-family: 'Open Sans', sans-serif;
  scroll-behavior: smooth;
}

#content {

    width: 85%;
    margin: 0px auto;
    display: block;
    padding: 0 0;
}

/*all headings formatting*/
p {
    margin: 0;
}


p.icon {

    float: none;
    margin: 0.5em auto;
    padding: 0.1em 2.1em 0.1em 2.1em;
    width: 250px;
    height: 250px;
    font-size: 100%;
    display: block;
    text-indent: -9999px;
    background-image:url(http://res.cloudinary.com/artofofiare/image/upload/v1504467493/iconimage_rm4s8s.png);
    background-size:contain;
    background-position:center center;
    background-repeat: no-repeat;
}
p.description {

    margin: 0.5em auto;
    padding: 0.7em 3em;
    text-align: justify;
    background-color: none;
}

p.descriptionwhite {

    margin: 0.5em auto;
    padding: 0.7em 3em;
    text-align: justify;
    background-color: #fff;
}


p.copyright {

    float: right;
    text-align: right;
    padding: 0.9em 0.4em;
    display: inline-block;
    background-color: #03bcee;
    margin: 2em 0;
    width: 100%; 
    color: #fff;
    border-top: 10px solid #eeeeee;
}

p.linksto {

    padding: 0.9em 0em;
    text-align: center;
    float: none;
    background-color: none;
    margin: 0 auto;
    color: #000;
    border-top: 10px solid #eeeeee;
    border-bottom: 10px solid #eeeeee;
    font-size: 100%;
    border-radius: 17px 0 17px 0;
    -moz-border-radius: 17px 0 17px 0;
    -webkit-border-radius: 17px 0 17px 0;
    -o-border-radius: 17px 0 17px 0;
}

h1 {
    font-size: 200%;
    font-weight: bold;
    padding: 0.5em 4em;
    margin: 0 auto;
    max-width: 100%;
    text-align: center;
    float: none;
    color: #363636;
    background-color: #fff;
    border-right: 10px solid #03bcee;
    border-left: 10px solid #03bcee;
}

h2 {

    font-size: 150%;
    color: #03bcee;
}

#header {

    background-color: #eeeeee;

}

#footer {

    margin: 0 auto;
}

em {


    margin: 0 auto;
    padding: 0.4em 0.2em;
    display: block;
    max-width: 100%;
    font-size: 120%;
    text-align: center;
    color: #fff;
    background-color: #03bcee;
    float: none;
    border-bottom: 1px #fff solid;
}

ul {
    margin: 0 auto;
    text-align: center;
    float: none;

}
li {

    background-color: #03bcee;
    padding: 1em 2.3em; 
    display: inline;
    margin: 0.2em 0.9em;
    font-size: 100%;
    border-radius: 17px 0 17px 0;
    -moz-border-radius: 17px 0 17px 0;
    -webkit-border-radius: 17px 0 17px 0;
    -o-border-radius: 17px 0 17px 0;
}
/*links formatting*/

a:link {
    color: #fff;
    text-decoration: none;
    
}

.linksto a:link {
    color: #000;
    text-decoration: none;
    
}

.linksto a:visited {
    color: #03bcee;
    text-decoration: none;
    
}

a:visited {
    color: #fff;
    text-decoration: none;
}

a:focus {
    color: #eeeeee;
}

a:hover {
    color: #000;
}


/*input box*/

fieldset {
    width: 800px;
    padding: 0.9em;
    border: 1px solid #03bcee;
    text-align:right;
    font-size: 100%;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -o-border-radius: 10px;
    display: block;
    
}

legend {
    text-align: right;
    
}

.title {
    float: left;
    width: 200px;
    text-align: right;
    padding-right: 2em;
}

.submit {
    text-align: right;
}

.space {
    padding-bottom: 0.8em;
}

.spacesend {
    padding-bottom: 0.3em;
}

label {
    
    float: left;
    display: block;
    padding-right: 2em;
    text-align: left;
}

label.title {
    
    float: left;
    display: block;
    padding-right: 2em;
    text-align: left;
}

input {
    width: 540px;
    padding: 0.6em 0.5em;
    margin-left: 0;
    border: 1px solid #03bcee;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    
}

input#send {
    width: 120px;
    padding: 0.8em 0;
    color: #fff;
    background-color: #03bcee;
    background: #03bcee;
    font-size: 100%;
    border-radius: 17px 0 17px 0;
    -moz-border-radius: 17px 0 17px 0;
    -webkit-border-radius: 17px 0 17px 0;
    -o-border-radius: 17px 0 17px 0;
}

textarea {
    width: 540px;
    padding-left: 0;
    margin-left: 0;
    border: 1px solid #03bcee;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    
}

textarea#commentbox {
    height: 75px;
    padding: 0.5em;
}

</style>
</head>

<body>
	<div id="content">
	   <div id="header">
		  <p class="icon">Icon space</p>
		  <h1>David Ofiare</h1>
		  <p><em>" impossibility is a short sighted myth "</em></p>

		  <h2>Know Me</h2>
		  <p class="descriptionwhite">I am first a very strong Nigerian in every sense of the word. A 2016 gradute of Civil Engineering from Madonna University Nigeria, Akpugo (currently in Service). Good at making great things come from nothing, and striving hard to make difficult things work.</p>
		  <p class="description">Strongly inclined towards every form of creativity in art and design and in every other form creativity presents itself, I am a couple of meters short of a wiz in Graphics Design, and can control comfortably a range of softwares ranging from Adobe Photoshop, Adobe Illustrator, Adobe After Effects, Adobe Premiere Pro, Cinema 4D down to the common Microsoft Paint.</p>
		  <p class="descriptionwhite">I also possess utilisable knowledge of HTML and CSS, and know a little something of what javascript can do. This is coupled with knowledge of other softwares like FL Studio and Audacity, utilisable for sound creation.</p>
		  <p class="description">I am very interested in learning fun things that would be brought to the table, and can function well with a team to further sharpen our skills for better productivity. I also love music and literature and a few calculations here and there.</p>

	   </div>
	   <div id="contact">

            <h2>Link Up</h2>

            <ul>
                <li class="onlineme"><a href="http://hnginterns.slack.com/messages/@artofofiare" target="_blank">My Slack</a></li>
                <li class="onlineme"><a href="http://github.com/artofofiare" target="_blank">My GitHUB</a></li>
                <li class="onlineme"><a href="mailto:artofofiare@yahoo.com" target="_blank">My Email</a></li>
            </ul>

            <h2>Tasks</h2>

                <p class="linksto"><a href="https://github.com/artofofiare/stage-tasks" target="_blank">Link to stage one Repo</a></p>

            <h2>Drop a Comment</h2>

            <p class="minitext">I would love to hear from you, since you now know the least about me</p>
                <form action="#" method="POST">
                <fieldset>
                    <legend>Looking forward</legend>
                        <div class="space">
                            <label for="name" class="title">Your Name:</label>
                            <input type="text" id="name" name="name" required="required" /> 
                        </div>

                        <div class="space">
                            <label for="email" class="title">Your Email:</label>
                            <input type="email" id="email" name="email" required="required" />
                        </div>

                        <div class="space">
                            <label for="subject" class="title">Subject:</label>
                            <input type="text" id="subject" name="subject" required="required" />
                        </div>

                        <div class="space">
                            <label for="commentbox">Message:</label>
                            <textarea id="commentbox" name="commentbox" placeholder="Tell me anything..."></textarea>
                        </div>

                        <div class="spacesend">
                            <input id="send" type="submit" value="send" />
                        </div>
                </fieldset>   
                </form>               
        </div>

        <div id="footer">

            <p class="copyright">Copyright 2017 'Art of Ofiare' Design</p>	

        </div>

	</div>
	

</body>
</html>