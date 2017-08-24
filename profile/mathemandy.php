<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = "Test"
    $to  = 'andyeshiet@gmail.com';
    $body = "Test"
    if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
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

<!DOCTYPE HTML>
<html>

<head>
    <title>Andy's Profile: @mathemandy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
      @import url(https://fonts.googleapis.com/css?family=Raleway:100,200,400,600);

html{
  height: 100%;
}
body {
  min-height: 100%;
  height: 100%;
  text-align: center;
  background: url(https://farm8.staticflickr.com/7426/9638120029_a0ce5b58c6_b.jpg) 50%;
  background-size: cover;
  background-attachment: fixed;
  font-family: "Raleway", "Helvetica Neue", Helvetica, Verdana, Tahoma, sans-serif;
  letter-spacing: 2px;
  line-height: 150%;
  color: #fff;
}
[class*='col-'] {
  margin-right: 15px;
}
[class*='col-']:last-of-type {
  margin-right: 0;
}
    .col-1{
        width: 100%
    }
    
.col-1-4 {
  width: 25%;
}
.col-1-3 {
  width: calc(33.33333% - 10px);
}
.col-3-4 {
  width: 75%;
}
[class*='col-'] {
  float: left;
}
.content:first-of-type {
  margin-top: 100px;
}
.sheath {
  width: 100%;
  position: absolute;
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(53,53,53, .4)), color-stop(100%, rgba(53,53,53, .6)));
}
.content {
  opacity: 0;
  padding: 1px;
  width: 100%;
  margin: 0 auto;
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(89,120,145, .5)), color-stop(100%, rgba(141,149,167, .9)));
    -webkit-animation: dropfade .3s ease-in 1s forwards; /* Safari and Chrome */ 
       -moz-animation: dropfade .3s ease-in 1s forwards; /* Firefox */
        -ms-animation: dropfade .3s ease-in 1s forwards; /* Internet Explorer */
         -o-animation: dropfade .3s ease-in 1s forwards; /* Opera */
            animation: dropfade .3s ease-in 1s forwards;
}
.skills {
  text-align: left;
  clear: both;
}
.skills p:nth-of-type(odd) {
  color: white;
  padding: 0 5px;
  line-height: 2em;
  background: #444;
  display: inline-block;
}
.skills p:nth-of-type(even) {
  font-weight: 600;
  font-size: .7em;
  text-transform: uppercase;
  margin-bottom: 1em;
}
.skills p:last-of-type {
  margin-bottom: 0;
}
    .skills .a {
	float: left;
	width: 100%;
}
.skills .b {
  float: left;
  width: calc(70% - 10px);
  margin-left: 10px;
  background: rgba(141,149,167,.2);
}

.time {
  height: calc(2em);
  background: rgb(141,149,167);
}
.ninety { width: 0%; 
  -webkit-animation: ninety .5s ease-in-out 4s forwards;
       -moz-animation: ninety .5s ease-in-out 4s forwards;
        -ms-animation: ninety .5s ease-in-out 4s forwards;
         -o-animation: ninety .5s ease-in-out 4s forwards;
            animation: ninety .5s ease-in-out 4s forwards; }
.eighty { width: 0%; 
  -webkit-animation: eighty .5s ease-in-out 4s forwards;
       -moz-animation: eighty .5s ease-in-out 4s forwards;
        -ms-animation: eighty .5s ease-in-out 4s forwards;
         -o-animation: eighty .5s ease-in-out 4s forwards;
            animation: eighty .5s ease-in-out 4s forwards; }
.seventy { width: 0%; 
  -webkit-animation: seventy .5s ease-in-out 4s forwards;
       -moz-animation: seventy .5s ease-in-out 4s forwards;
        -ms-animation: seventy .5s ease-in-out 4s forwards;
         -o-animation: seventy .5s ease-in-out 4s forwards;
            animation: seventy .5s ease-in-out 4s forwards;}
.sixty { width: 0%; 
-webkit-animation: sixty .5s ease-in-out 4s forwards;
       -moz-animation: sixty .5s ease-in-out 4s forwards;
        -ms-animation: sixty .5s ease-in-out 4s forwards;
         -o-animation: sixty .5s ease-in-out 4s forwards;
            animation: sixty .5s ease-in-out 4s forwards;}
.fifty { width: 0%; 
-webkit-animation: fifty .5s ease-in-out 4s forwards;
       -moz-animation: fifty .5s ease-in-out 4s forwards;
        -ms-animation: fifty .5s ease-in-out 4s forwards;
         -o-animation: fifty .5s ease-in-out 4s forwards;
            animation: fifty .5s ease-in-out 4s forwards;}
.forty { width: 0%; 
-webkit-animation: forty .5s ease-in-out 4s forwards;
       -moz-animation: forty .5s ease-in-out 4s forwards;
        -ms-animation: forty .5s ease-in-out 4s forwards;
         -o-animation: forty .5s ease-in-out 4s forwards;
            animation: forty .5s ease-in-out 4s forwards;}
.thirty { width: 0%; 
-webkit-animation: thirty .5s ease-in-out 4s forwards;
       -moz-animation: thirty .5s ease-in-out 4s forwards;
        -ms-animation: thirty .5s ease-in-out 4s forwards;
         -o-animation: thirty .5s ease-in-out 4s forwards;
            animation: thirty .5s ease-in-out 4s forwards;}
.twenty { width: 0%; 
-webkit-animation: twenty .5s ease-in-out 4s forwards;
       -moz-animation: twenty .5s ease-in-out 4s forwards;
        -ms-animation: twenty .5s ease-in-out 4s forwards;
         -o-animation: twenty .5s ease-in-out 4s forwards;
            animation: twenty .5s ease-in-out 4s forwards;}
.ten { width: 0%; 
-webkit-animation: ten .5s ease-in-out 4s forwards;
       -moz-animation: ten .5s ease-in-out 4s forwards;
        -ms-animation: ten .5s ease-in-out 4s forwards;
         -o-animation: ten .5s ease-in-out 4s forwards;
            animation: ten .5s ease-in-out 4s forwards;}
.tricks {
  display: inline-block;
  padding: 20px;
  color: #666;
  opacity: 0;
  width: 100%;
  background: rgba(255,255,255,.8);
    -webkit-animation: dropfade .3s ease-in 1s forwards; /* Safari and Chrome */ 
       -moz-animation: dropfade .3s ease-in 1s forwards; /* Firefox */
        -ms-animation: dropfade .3s ease-in 1s forwards; /* Internet Explorer */
         -o-animation: dropfade .3s ease-in 1s forwards; /* Opera */
            animation: dropfade .3s ease-in 1s forwards;
}
.shmall {
  font-size: .8em;
  text-transform: uppercase;
  text-spacing: 100%;
  line-height: 1.1em;
}
.title {
  font-weight: 600;
  text-transform: uppercase;
  font-size: 1em;
  line-height: 1.1em;
}
.stoveBreak {
  width: 100%;
  border-bottom: solid 2px;
  margin: 1em 0;
}
.endroit {
  font-weight: 400;
  text-transform: capitalize;
  font-size: 1em;
}
.cover {
  position: absolute;
  padding-top: 22px;
  height: 130px;
  width: calc((60% + 60px)/3 - 30px);
  opacity: 0;
  margin-left: 5px;
  margin-top: -72px;
  color: #fff !important;
  background: rgb(141,149,167) !important;
  border: 10px solid rgb(141,149,167);
  -webkit-transition: .2s ease-in-out all;
}


.cover:hover:after {
  left: -20px;
  top: -20px;
  border: 2px solid rgb(141,149,167);  
  height: 150px;
  width: calc(100% + 41px);
}

.cover:after {
  content: '';  
  left: -10px;
  top: -10px;
  position: absolute;   
  border: 2px solid rgb(141,149,167);  
  height: 130px;
  width: calc(100% + 21px);
  -webkit-transition: all .3s ease-in;
}

.stove:hover > .cover {
  opacity: 1;
  -webkit-transition: .7s ease-in-out all;
}

h3 {
  position: relative;
  font-size: .4em;
  letter-spacing: 2px;
  font-weight: 200;
  top: 25px;
}
.dot {
  padding: 65px 5px 5px 5px;
  width: 45%;
  background: rgba(255,255,255,.8);
  height: 150px;
  color: rgb(141,149,167);
  position: relative;
  margin-bottom: 30px
}
.dot.r {
  width: calc((60% + 60px)*.45);
  right: calc((100% - (60% + 60px)) / 2);
  position: absolute;
  margin-top: -100px
}
.dot.l:after {
  content: '';
  width: 0; 
	height: 0; 
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 10px solid rgba(255,255,255,.8);
  right: -10px;
  top: 10px;
  position: absolute;   
}
.dot.r:after {
  content: '';
  width: 0; 
	height: 0; 
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-right: 10px solid rgba(255,255,255,.8);
  left: -10px;
  top: 10px;
  position: absolute;   
}
.stove {
  padding: 65px 5px 5px 5px;
  opacity: 0;
  background: rgba(255,255,255,.8);
  height: 150px;
  color: rgb(141,149,167);
  overflow: hidden;
  -webkit-transition: .5s ease-in-out all;
}

.stove:hover {
  color: rgba(0,0,0,0);
  background: none;
  cursor: pointer;
  -webkit-transition: .2s ease-out all;
}

.stove:nth-of-type(1) {
  
  -webkit-animation: fadein .2s ease-in 1.5s forwards;
       -moz-animation: fadein .2s ease-in 1.5s forwards;
        -ms-animation: fadein .2s ease-in 1.5s forwards;
         -o-animation: fadein .2s ease-in 1.5s forwards;
            animation: fadein .2s ease-in 1.5s forwards;
}
.stove:nth-of-type(2) {
  -webkit-animation: fadein .2s ease-in 1.6s forwards;
       -moz-animation: fadein .2s ease-in 1.6s forwards;
        -ms-animation: fadein .2s ease-in 1.6s forwards;
         -o-animation: fadein .2s ease-in 1.6s forwards;
            animation: fadein .2s ease-in 1.6s forwards;
}
.stove:nth-of-type(3) {
  -webkit-animation: fadein .2s ease-in 1.7s forwards;
       -moz-animation: fadein .2s ease-in 1.7s forwards;
        -ms-animation: fadein .2s ease-in 1.7s forwards;
         -o-animation: fadein .2s ease-in 1.7s forwards;
            animation: fadein .2s ease-in 1.7s forwards;
}
    .container {
    padding: 0 16px;
  }
a {
  color: #fff;
  font-weight: 500; }
.head {
  font-size: 1.5em;
  font-weight: 600;
  text-transform: uppercase;
  margin-bottom: .5em;
  min-height: 100%;
}
          .name {
	font-size: 2em;
	letter-spacing: 0px;
	padding: 30px;
	
}
        
    
.name {
  font-weight: 600;
  text-transform: uppercase;
  margin: 0 auto 5%;
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(53,53,53, .4)), color-stop(100%, rgba(53,53,53,.8)));
  -webkit-animation: fadein .3s ease-out;
       -moz-animation: fadein .3s ease-out;
        -ms-animation: fadein .3s ease-out;
         -o-animation: fadein .3s ease-out;
            animation: fadein .3s ease-out;
}
.row {
  content: "";
  display: table;
  clear: both;
  width: calc(60% + 60px);
  margin: 0 auto 30px;
}

*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.info {
  text-transform: uppercase;
  font-weight: 600;
  margin: 35px auto;
  width: 90%;
  position: relative;
  padding: 18px 0;
  font-size: 1em;
  border-top: solid 2px ;
  border-bottom: solid 2px ; }

.me {
  opacity: 0;
  height: 160px;
  width: 160px;
  border-radius: 80px;
  margin: 0 auto;
  background:  url(https://avatars2.githubusercontent.com/u/6526607?v=4&s=400) center; 
  background-size: cover;
  border: 2px #E91E63 solid;
  margin-top: -80px;
  position: relative; 
    -webkit-animation: fadein .5s ease-in .8s forwards;
       -moz-animation: fadein .5s ease-in .8s forwards;
        -ms-animation: fadein .5s ease-in .8s forwards;
         -o-animation: fadein .5s ease-in .8s forwards;
            animation: fadein .5s ease-in .8s forwards;
}

.me:after {
  content: '';  
  position: absolute;   
  border-radius: 800px;
  border: 2px solid #E91E63;  
  
   -webkit-animation: boop .3s ease-out 1.2s forwards;
       -moz-animation: boop .3 ease-out 1.2s forwards;
        -ms-animation: boop .3 ease-out 1.2s forwards;
         -o-animation: boop .3 ease-out 1.2s forwards;
            animation: boop .3 ease-out 1.2s forwards;
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@keyframes ninety {
    from { width: 0; }
    to   { width: 90%; }
}
@keyframes eighty {
    from { width: 0; }
    to   { width: 80%; }
}
@keyframes seventy {
    from { width: 0; }
    to   { width: 70%; }
}
@keyframes sixty {
    from { width: 0; }
    to   { width: 60%; }
}
@keyframes fifty {
    from { width: 0; }
    to   { width: 50%; }
}
@keyframes forty {
    from { width: 0; }
    to   { width: 40%; }
}
@keyframes thirty {
    from { width: 0; }
    to   { width: 30%; }
}
@keyframes twenty {
    from { width: 0; }
    to   { width: 20%; }
}
@keyframes ten {
    from { width: 0; }
    to   { width: 10%; }
}

@keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 180px;  
            height: 180px;  
            left: -12px; top: -12px; }
}

/* Firefox */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@-moz-keyframes ninety {
    from { width: 0; }
    to   { width: 90%; }
}
@-moz-keyframes eighty {
    from { width: 0; }
    to   { width: 80%; }
}
@-moz-keyframes seventy {
    from { width: 0; }
    to   { width: 70%; }
}
@-moz-keyframes sixty {
    from { width: 0; }
    to   { width: 60%; }
}
@-moz-keyframes fifty {
    from { width: 0; }
    to   { width: 50%; }
}
@-moz-keyframes forty {
    from { width: 0; }
    to   { width: 40%; }
}
@-moz-keyframes thirty {
    from { width: 0; }
    to   { width: 30%; }
}
@-moz-keyframes twenty {
    from { width: 0; }
    to   { width: 20%; }
}
@-moz-keyframes ten {
    from { width: 0; }
    to   { width: 10%; }
}

@-moz-keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@-moz-keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 180px;  
            height: 180px;  
            left: -12px; top: -12px; }
}

/* Safari and Chrome */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@-webkit-keyframes ninety {
    from { width: 0; }
    to   { width: 90%; }
}
@-webkit-keyframes eighty {
    from { width: 0; }
    to   { width: 80%; }
}
@-webkit-keyframes seventy {
    from { width: 0; }
    to   { width: 70%; }
}
@-webkit-keyframes sixty {
    from { width: 0; }
    to   { width: 60%; }
}
@-webkit-keyframes fifty {
    from { width: 0; }
    to   { width: 50%; }
}
@-webkit-keyframes forty {
    from { width: 0; }
    to   { width: 40%; }
}
@-webkit-keyframes thirty {
    from { width: 0; }
    to   { width: 30%; }
}
@-webkit-keyframes twenty {
    from { width: 0; }
    to   { width: 20%; }
}
@-webkit-keyframes ten {
    from { width: 0; }
    to   { width: 10%; }
}

@-webkit-keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@-webkit-keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 190px;  
            height: 190px;  
            left: -17px; top: -17px; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@-ms-keyframes ninety {
    from { width: 0; }
    to   { width: 90%; }
}
@-ms-keyframes eighty {
    from { width: 0; }
    to   { width: 80%; }
}
@-ms-keyframes seventy {
    from { width: 0; }
    to   { width: 70%; }
}
@-ms-keyframes sixty {
    from { width: 0; }
    to   { width: 60%; }
}
@-ms-keyframes fifty {
    from { width: 0; }
    to   { width: 50%; }
}
@-ms-keyframes forty {
    from { width: 0; }
    to   { width: 40%; }
}
@-ms-keyframes thirty {
    from { width: 0; }
    to   { width: 30%; }
}
@-ms-keyframes twenty {
    from { width: 0; }
    to   { width: 20%; }
}
@-ms-keyframes ten {
    from { width: 0; }
    to   { width: 10%; }
}

@-ms-keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@-ms-keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 180px;  
            height: 180px;  
            left: -12px; top: -12px; }
}   
    
/*    This styling is for the form*/
h1 {
  width: 100%;
  background: #E91E63;
  padding: 20px;
  color: white;
  box-shadow: 0 5px 5px 0 rgba(0,0,0,0.05);
  border-radius: 3px 3px 0 0;
}
     .hide {
            display: none;
        }

form {
    font-family: 'roboto', sans-serif;
    width: calc(60% + 60px);
    margin: 0 auto 30px;
    margin-top: auto;
    box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
    padding: 0 0 40px;
    border-radius: 3px;
    color: #E1E1E1;
     background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(89,120,145, .5)), color-stop(100%, rgba(141,149,167, .9)));
    -webkit-animation: dropfade .3s ease-in 1s forwards; /* Safari and Chrome */ 
       -moz-animation: dropfade .3s ease-in 1s forwards; /* Firefox */
        -ms-animation: dropfade .3s ease-in 1s forwards; /* Internet Explorer */
         -o-animation: dropfade .3s ease-in 1s forwards; /* Opera */
            animation: dropfade .3s ease-in 1s forwards;
}
    input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
    font: inherit;
    transition: transform 0.3s ease-in-out, font-size 0.3s ease-in-out, visibility 0.3s ease-in-out;
}
    
    input,
textarea {
    margin: 20px 50px 20px;}
    
       @media only screen and (min-width: 480px){
         input, textarea{
            margin: 20px 70px 20px;
        }
    }
    
    @media only screen and (min-width: 768px){
        input, textarea{
            margin: 20px 360px 20px;
            
        }
         .name {
  font-size: 3em;
  letter-spacing: 5px;
  padding: 50px;
        
    }
        .skills .a {
  float: left;
  width: 30%;
}
        .skills {
  text-align: right;
  clear: both;
}
    }
 
    

input,
textarea {
    font: inherit;
    font-size: 0.8em;
    width: 400px
    display: block;
    border: none;
    padding: 20px 0 10px;
    border-bottom: solid 1px #03A9F4;
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #03A9F4 4%);
    background-position: -400px 0;
    background-size: 400px 100%;
    background-repeat: no-repeat;
    transition: background 0.3s cubic-bezier(.64,.09,.08,1);
    resize: none;
    overflow: hidden;
    &:focus::-webkit-input-placeholder {
        color: #03A9F4;
    }
    &:focus,
    &:valid {
        box-shadow: none;
        outline: none;
        background-position: 0 0;
        &::-webkit-input-placeholder {
            font-size: 0.8em;
            transform: translateY(-20px);
            visibility: visible !important;
            opacity: 1;
        }
    }
}
input[type="email"] {
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #03A9F4 4%);
    background-position: -400px 0;
    background-repeat: no-repeat;
    transition: border-bottom 0.3s ease, background 0.3s ease;
    &~span.validation-text {
        position: absolute;
        visibility: hidden;
        font-family: 'roboto', sans-serif;
        font-size: 0.6em;
        width: $width;
        margin-left: 25px;
        margin-top: -5px;
        color: white;
        transition: color 0.3s ease-in-out;
    }
    &:not([value=""]) {
        &::-webkit-input-placeholder {
            font-size: 0.8em;
            transform: translateY(-20px);
            visibility: visible !important;
            opacity: 1;
        }
        &:focus::-webkit-input-placeholder {
            color: #03A9F4;
        }
        &:focus:not(:valid)::-webkit-input-placeholder {
            color: #E91E63;
        }
    }
    &:focus {
        background-position: 0 0;
        &:not(: valid): not([value=""]) {
            border-bottom: solid 1px #E91E63;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #E91E63 4%);
        }
    }
    &:not(:focus):not(:valid):not([value=""]) {
        &::-webkit-input-placeholder {
            color: #E91E63;
        }
        border-bottom: solid 1px #E91E63;
        background-position: 0 0;
        background: linear-gradient(to bottom,
        rgba(255,
        255,
        255,
        0) 96%,
        #E91E63 4%);
        &~span.validation-text {
            visibility: visible;
            color: #E91E63;
        }
    }
}
.flex {
    display: flex;
    align-items: stretch;
    textarea {
        line-height: 120%;
    }
}
button {
    font-family: 'roboto', sans-serif;
    transition: transform 0.2s cubic-bezier(.64,.09,.08,1);, box-shadow 0.2s cubic-bezier(.64,.09,.08,1);
    border: none;
    background: #03A9F4;
    cursor: pointer;
    border-radius: 3px;
    padding: 6px;
    width: $width;
    color: white;
    margin: 30px 0 0 25px;
    box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
    &:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 6px 0 rgba(0, 0, 0, 0.2);
    }
}
    
    </style>

</head>

<body>
   
<div class="sheath">
<div id="body-wrapper">
  
  <div class="name">Andy Eshiet
      <h3>Akwa-ibom, Nigeria</h3>
      <h3> <a class="links" href="https://hnginterns.slack.com"><i class="fa fa-slack"></i> mathemandy </a>
          </h3>
    
    
    </div>
  
  <div class="row">    
      <div class="content">
        <div class="me"></div>
        <div class="info">
          <p>
            Android Developer, Computer Science Student of University of Uyo. I believe Discovery involves experimentation.
          </p>
        </div>
      </div> 
  </div>
 <div class="row">
  <div class="tricks">
  
    <div class="skills">
      <div class="a">
        <p>SQL Server</p>
        <p class="lvl">Intermediate</p>
      </div>
      <div class="b">
        <div class="time thirty"></div>
      </div>
    </div>  
    <div class="skills">
      <div class="a">
        <p>CSS</p>
        <p class="lvl">INTERMEDIATE</p>
      </div>
      <div class="b">
        <div class="time forty"></div>
      </div>
    </div>
    <div class="skills">
      <div class="a">
        <p>Javascript</p>
        <p class="lvl">BEGINNER</p>
      </div>
      <div class="b">
        <div class="time twenty"></div>
      </div>
    </div> 
    <div class="skills">
      <div class="a">
        <p>Java</p>
        <p class="lvl">Intermediate</p>
      </div>
      <div class="b">
        <div class="time fourty"></div>
      </div>
    </div> 
    <div class="skills">
      <div class="a">
        <p>Android Development</p> 
        <p class="lvl">Intermediate</p>
      </div>
      <div class="b">
        <div class="time ninety"></div>
      </div>
    </div> 
  
 </div>
 <div class="head">Project</div>
  <div class="row">
    <div class="col-1">
      <div >
          <h2>
            <a class="title" href="https://github.com/mathemandy/HNG-Test"><i class="fa fa-github"></i> Stage-1</a>
     
          </h2>
      
        </div>
      
  </div>

  </div></div>
    
    <div class="container">
    <?php if(isset($error) && !empty($error)): ?>
          <blockquote style="text-align: left;padding:5px;background: #fcf6f6; border-left:15px solid red;">
            <ul style='list-style:none;'>
              <?php
                foreach ($error as $key => $value) {
                  echo "<li>$value</li>";
                }
              ?>
            </ul>
          </blockquote>
<?php endif; ?>
        
    
        <form action="#" method="POST">
 <h1>Miss Me and wanna Hit me?</h1>


  <input placeholder="Name" name="name" type="text" value="" required>
  <input placeholder="Email address" type="email" onblur="this.setAttribute('value', this.value);" value="" required>
            
  <div>
    <span class="validation-text">Please enter a valid email address.
  </span>
  </div>
      
  <input placeholder="Subject" type="text" name="subject" value="" required>
            
  <div class="flex">
    
  <textarea placeholder="Message" name="message" rows="4"cols="50" required></textarea>
  </div>
            
  <button type="submit" name="submit">
      Send
</button>
</form>

    
    </div>

<a href="https://twitter.com/mathemandy" target="_blank"><i class="fa fa-twitter"></i>Follow Me</a>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
     </body>
        </html>