<?php
/*    $admin_email = 'xyluz@ymail.com';
*/  
  $config = include('../../config.php');

  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);

  $exe = $con->query('SELECT * FROM password LIMIT 1');
  $data = $exe->fetch();
  $password = $data['password'];

    if (isset($_GET['send'])) {
        $subject = $_GET['subject'];
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['body'])));
        $to = "Joseph.mbassey2@gmail.com";
        $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";
        header("Location: " .$location);
    }

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Joseph Profile Page</title>

<style type="text/css">
    
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/*-- start editing from here --*/
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{ vertical-align:baseline;}/* vertical align baseline */
.vertical-top{  vertical-align:top;}/* vertical align top */
nav.vertical ul li{ display:block;}/* vertical menu */
nav.horizontal ul li{   display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*-- end reset --*/
body {
    font-family: 'Open Sans', sans-serif;
    background: #ccc;
    background-attachment: fixed;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    -ms-background-size:cover;
    background-size:cover; 
}
h1 {
    font-size: 3em;
    text-align: center;
    color: #fff;
    font-weight: 100;
    font-family: 'Quicksand', sans-serif;
}
/*-- main --*/
.main {
    padding: 2em 0 0;
    width: 100%;
}
.main-wthree-row{
    width: 40%;
    margin: auto;
    background: #fff;
    padding: 3em;
    -webkit-box-shadow: 0px 0px 8px 1px #002531;
    -moz-box-shadow: 0px 0px 8px 1px #002531;  
    box-shadow: 0px 0px 8px 1px #002531;
}
.main-wthree-row h4 {
    font-family: 'Quicksand', sans-serif;
    font-size: 1.9em;
    text-align: center;
    letter-spacing: 1px;
    color: #333;
    margin-bottom: 8px;
    line-height: 1 em;
}
.main-wthree-row h4 span {
    color: #00BCD4;
}
/*-- text-info --*/
.agileits-infoleft {
    width: 100%;
}
.agileits-infoleft img {
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;

}

.agileits-inforight{
    float: right; 
}
.agileits-info h2 {
    font-size: 1.3em;
    color: #00BCD4;
    font-weight: 500;
    font-family: 'Quicksand', sans-serif;
    text-transform: uppercase;
    margin-top: .5em;
    text-align: center;
}
.agileits-info h6 {
    font-size: 1.em;
    color: #ccc;
    margin-top: 0.8em;
    text-align: center;
    font-weight: 500;
}
.agileits-inforight p {
    font-size: 1em;
    color: #fff;
    margin: 0.5em ;
}
.agileits-inforight p a{
    color: #fff;
    text-decoration:none;
    background: #122350;
    border-radius: 5px;
    -webkit-transition: 0.5s all; 
    -moz-transition: 0.5s all;
    transition: 0.5s all;
}
.agileits-inforight p a:hover {
    background: #1C2833;
}
.agileits-inforight img {
    margin-right: 1px;
} 
.agileits-info {
    width: 100%;
    background: #1c2833;
    border-bottom: 1px solid #e8e7e7;
    padding-bottom: 1.5em;
    margin-bottom: 1.5em;
}.agileits-infotext{
}
/*-- text-info --*/
/*-- contact-form --*/
h3 {
    font-size: 1.3em;
    color: #333;
    font-family: 'Quicksand', sans-serif;
    margin-bottom: 1em;
    text-transform: capitalize;
    text-align: center;
}
.contact-w3left {
    float: left;
    width: 50%;
}
.contact-w3right {
    float: right;
    width: 48%;
}
.contact-wthree input[type="text"], .contact-wthree input[type="email"] {
    width: 87%;
    color: #999;
    background: none;
    outline: none;
    font-size: .9em;
    padding: .6em 1em; 
    border: solid 1px #ccc;
    -webkit-appearance: none;
    font-family: 'Open Sans', sans-serif;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    transition: 0.5s all;
}
input.email {
    margin: 1em 0;
}
.contact-wthree textarea {
    resize: none;
    width: 90.5%;
    height: 120px;
    background: none;
    color: #999;
    font-size: .9em;
    outline: none;
    padding: .6em 1em;
    border: solid 1px #ccc;
    min-height: 5em;
    -webkit-appearance: none;
    font-family: 'Open Sans', sans-serif;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    transition: 0.5s all;
}
.contact-wthree input[type="submit"] {
    outline: none;
    color: #fff;
    padding: 0.6em 1em;
    font-size: 0.9em;
    margin: 0.8em 0 0 0;
    -webkit-appearance: none;
    background: #00BCD4;
    border: 2px solid #00BCD4;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    transition: 0.5s all;
    width: 100%;
    cursor: pointer;
}
.contact-wthree input[type="submit"]:hover {
    color: #00BCD4;
    background: transparent;
    letter-spacing: 2px;
} 
::-webkit-input-placeholder {
   color: #999;   
} 
:-moz-placeholder { /* Firefox 18- */
   color: #999; 
} 
::-moz-placeholder {  /* Firefox 19+ */
   color: #999; 
} 
:-ms-input-placeholder {  
   color: #999; 
} 
/*-- //main --*/
/*-- copyright --*/
.w3copyright-agile {
    margin: 2em 0;
    text-align: center;
}
.w3copyright-agile p {
    font-size: 0.9em;
    color: #fff;
    line-height: 1.8em;
    letter-spacing: 2px;
}
.w3copyright-agile p a{
    color: #fff; 
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}
.w3copyright-agile p a:hover{
    color: #00bcd4; 
}
/*-- //copyright --*/ 
/*-- responsive-design --*/
@media(max-width:1440px){
.main-wthree-row {
    width: 35%; 
}
} 
@media(max-width:1280px){
.main-wthree-row {
    width: 37%;
}
h1 {
    font-size: 2.8em; 
}
}
@media(max-width:1080px){
.main-wthree-row {
    width: 45%;
    margin: 2em auto;
}
} 
@media(max-width:991px){
.main-wthree-row h4 { 
    font-size: 1.3em; 
}
.main-wthree-row {
    width: 48%; 
}
}
@media(max-width:800px){
h1 {
    font-size: 2.3em;
}
.main {
    padding: 1.5em 0 0;
}
.main-wthree-row {
    width: 60%;
    padding: 2em;
}
.agileits-inforight p {
    font-size: 0.95em; 
}
}
@media(max-width:736px){
.main-wthree-row {
    width: 64%;  
} 
.w3copyright-agile p { 
    letter-spacing: 1px;
}
.contact-wthree input[type="text"], .contact-wthree input[type="email"],.contact-wthree textarea {
    width: 85%; 
}
}
@media(max-width:640px){
.main-wthree-row {
    width: 68%; 
}
}
@media(max-width:600px){
.main-wthree-row {
    width: 73%;
}
}
@media(max-width:480px){
.main {
    padding: 1em 0 0;
}
h1 {
    font-size: 2em;
}
.main-wthree-row {
    width: 75%;
    margin: 1.2em auto;
    padding: 1.5em;
}
.main-wthree-row h4 {
    font-size: 1.2em;
}
.agileits-inforight p {
    font-size: 0.8em;
}
.agileits-infoleft { 
    width: 56%;
} 
.agileits-info h6 {
    font-size: 0.8em; 
}
.agileits-info { 
    padding-bottom: 1em;
    margin-bottom: 1em;
}
h3 {
    font-size: 1.2em; 
    margin-bottom: 0.8em; 
}
.agileits-info h2 {
    font-size: 1em;
}
.contact-wthree input[type="text"], .contact-wthree input[type="email"], .contact-wthree textarea {
    width: 84%;
    font-size: .8em;
}
.contact-wthree input[type="submit"] { 
    font-size: 0.8em; 
}
.w3copyright-agile p { 
    padding: 0 1em;
    font-size: 0.8em;
}
}
@media(max-width:414px){
.main-wthree-row h4 {
    font-size: 1em;
}
.agileits-infoleft,.agileits-inforight{
    float: none;
    margin: 0 auto;
    text-align: center;
    width: 100%;
}
.agileits-infotext {
    float: none;
}
h3 {
    font-size: 1em; 
}
.contact-w3left ,.contact-w3right {
    float: none;
    width: 100%;
}
input.email {
    margin: 0.5em 0;
} 
.contact-wthree textarea { 
    margin-top: .5em;
}
.contact-wthree input[type="text"], .contact-wthree input[type="email"], .contact-wthree textarea {
    width: 89%;
    font-size: .8em;
}
.w3copyright-agile {
    margin: 1em 0; 
}
.agileits-info h6 { 
    margin-top: 0.5em; 
}
.agileits-inforight img {
    margin-right: 3px;
    width: 5%;
}
h3 {
    font-size: 0.9em;
}
.contact-wthree input[type="text"], .contact-wthree input[type="email"], .contact-wthree textarea {
    width: 88%; 
}
} 
@media(max-width:375px){
.main-wthree-row {  
    padding: 1.2em;
}
.main-wthree-row h4 {
    font-size: 0.9em;
}
.agileits-info h2 {
    font-size: 0.9em;
}
h1 {
    font-size: 1.8em;
}
}
@media(max-width:320px){
h1 {
    font-size: 1.6em;
}
}
/*-- //responsive-design --*/

</style>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Profile Joseph Bassey" />

<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" />
<!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main">
        <div class="main-wthree-row">
            <h4><span>Bassey, Joseph Michael </span></h4>
            <div class="agileits-info">
                <div class="agileits-infoleft">
                    <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAoJAAAAJGQ4NzJlMzE0LWQ3MDAtNGU1NC04MDU2LTI0ZjUwMTBkN2JkOQ.jpg" alt="Joseph"/>
                    <div class="agileits-infotext">
                        <h2>About Me</h2>
                        <h6><p>
                         From Akwa Ibom State, Nigeria, I reside in Calabar, and I'm pursuing my first Degree In Computer Science at Cross River University Of Technology. Calabar. <br>
                         <h6>I can Code (HTML, CSS, JavaScript PHP, MYSQL) </h6>

                        </p> </h6> 
                    </div> 
                </div> 
                <div class="agileits-inforight"> 
                    <p><img src="http://res.cloudinary.com/dygbn2svl/image/upload/v1503521670/icons/slack.png" alt=""> @jonesky</p>
                    <p><img src="http://res.cloudinary.com/dygbn2svl/image/upload/v1503521647/icons/git.png" alt=""> <a href="https://github.com/Joseph-MB/HNG-intern-test"> Stage1-Result</a></p>
                </div>  
                <div class="clear"> </div>

            </div>
            <h3>Contact Me</h3>
            </ul>
          </blockquote>
            <div class="contact-wthree">
                <form action="" method="GET">
                    <div class="contact-w3left w3-agile">
                        <input type="text" name="name" placeholder="Enter Yourname" required /> 
                        <input type="text" class="email" name="subject" placeholder="Email Subject" required="email" />
                    </div>
                    <div class="contact-w3right">
                        <textarea name="message" placeholder="Message" required="" rows="5" cols="40"></textarea>
                        <input type="submit" name="send" value="SEND">
                    </div> 
                    <div class="clear"> </div>
                </form> 
            </div>  
        </div>  
    </div>  
    <!-- //main -->    
</body>
</html>
