<?php

 if(isset($_POST['send_email'])){
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
        $email = $_POST['email'];
        $body = $_POST['message'];
        $to = 'israelhoncho@gmail.com';

    $subject = $subject;
    $body_message .= 'Password:  ' . $password . "\r\n";
    $body_message .= 'Message:  ' . $message . "\r\n";
    $headers = 'From: ' . $email . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";
    $mail_sent = mail($to, $subject, $body_message, $headers);

    if($mail_sent == true){ 
            header("location: http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);

    }else { 
            header('location: http://hng.fun/profile/nattyjay2/');
       } 

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Honcho Internship Profile</title>
</head>
<style type="text/css">


     html, body {
        font-family: Lato;
        padding: 0;
        margin: 0;
    }

    .page{
    min-width:1000px;
    height:auto;
    width:100%;
    }

    .content_container {
	height:auto;
	margin-top:5px;
	width:95%;
    margin: 0 auto;
    }

    .image{

    	width:200px;
    	min-width: 200px;
    	margin: 0 auto;
        margin-top:0px;
        padding: 10px 0px 0px 0px ;
        margin-bottom: -100px;

    }

    .profile{
        width: 50%;
        height:500px;
        text-align: justify;
        margin: 0 auto;
        z-index: -3;
        padding: 0px 10px 0px 10px;
         box-shadow: 0 2px 2px rgba(0, 0, 0, 0.095) inset, 0 0 8px #232323;
        border: 1px solid;
        margin-bottom:-90px;


    }

    .sub_prfile{
        width:100%;
        height:300px;
        margin-top:100px;
    }
    .profile .sub_prfile p{
        padding:10px 10px 10px 10px;
        font-family: sans-serif;
        line-height: 2.0;
    }

    .profile .sub_prfile h4{
        text-align: center;
        text-decoration: underline;
        padding:10px 10px 10px 10px;
        text-transform: capitalize;
    }


    .form{
        width:40%;
        margin-top:-100px;
        padding: 10px;
        margin: 0 auto;
        height:auto;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px #232323;
        background-color: rgba(20,20,30,0.8);
    }
    #phone{
        height:35px;
        width: 87%;
        margin: 0 auto;
        margin-left: 35px;
        margin-top: 10px;
        display: block;
        outline: none;
        border: none;
        border-radius: 5px;
        border: 1px solid #ede;
        color: #232323 !important;
    }
    .each{
        height:50px;
        margin: 0 auto;
        margin-top: 10px;
        display: block;
    }

    .icons{
        width:25%;
        height:30px;
        margin-left:30px;
        margin-top: 10px;
        display: inline-block;
        padding: 0px 0px 0px 10px;
    }

    .icons p{
        text-align: center;
        top:0px;
    }

    .footer{
        height: auto;
        background-color: #202D2D;
        margin-top: 10px;
       
    }
    #name, #email{
    	    margin-top:15px;
            width: 38%;
            padding: 1%;
            height: 20px;
            margin-left:35px;
            outline: none;
            border: none;
            border-radius: 5px;
            border: 1px solid #ede;
            color: #232323 !important;
    }

    #text{
        height:100px;
        width: 87%;
        margin: 0 auto;
        margin-left: 35px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #ede;
        color: #232323 !important;
    }

     #name:focus, #email:focus,#name:hover, #email:hover, #phone:hover, #phone:focus{
     	 box-shadow: 0px -1px 3px 3px rgba(50, 50 ,50 , 0.4);
     }*/

      input[type="number"]{
    	    margin:5px;
            width: 50px;
            padding: 50%;
            height: 20px;
            margin-left:35px;
            
    }

    #button{
            width: 20%;
            height: 40px;
            background-color: yellow;
            border-radius: 10px;
            padding: 1% 1%;
            margin:5px;
            color: white;
            float: right;
            background-color: #232323;
            border: 1px solid #198037;
            outline: none;
            cursor: pointer;
    }

    #button:hover{
                 background-image: linear-gradient(to top, #f5f5f5 0%, #fff 100%);
                 color:black;
            box-shadow: 0px -1px 3px 3px rgba(50, 50 ,50 , 0.4);
    }

     .eacho{
        width: 
        height:50px;
        margin: 0 auto;
        margin-top: 10px;
        display: block;
    }

    .icons{
        width:25%;
        height:30px;
        margin-left:30px;
        margin-top: 10px;
        display: inline-block;
        padding: 0px 0px 0px 10px;
    }

    .footer .foot .icons a{
        text-decoration: none;
        color:white;
    }

.foot{
    height: 60px;
min-width: 200px;
color: white;
line-height: 40px;
text-align: center;
}
</style>
<body>
<div class="page">
	<div class="content_container">
       
    		<div class="image">
                
    			<img src="mypic.jpg" width="200px" height="210px" style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.095) inset, 0 0 8px #232323;
        border-radius: 5px;">
    		</div>

            <div class="profile">
                <div class="sub_prfile">
                    <h4>Short Profile of Joshua Israel</h4>

                    <p>Joshua Israel is a final year student studying Computer Engineering in university of Uyo, Uyo Akwa Ibom State Nigeria, . He is passionate of becoming a good software developer. He has passion also for motivational/inspirational public speaking with the burning zeal and desire to motivate, inspire and influence the new generation of leaders who will serve humanity with passion through proper orientation of societal core values. He is 6.2ft tall. He loves reading . </p>

                </div>

            </div>
             <div class="form">
                        <form id="myform" name="fomr" method="post" action="">
                           <div class="each">
                                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                            </div>
                            
                            <div class="eacho">
                                      <input type="text" id="phone" name="subject" placeholder="Your subject" required>
                            </div>
                            <div class="eacho">
                                      <textarea id="text" name="message" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="each">
                                      <input type="submit" id="button" name="send_email" value="Submit" >
                                      
                            </div>
                        </form>
                            
                           
                        
            </div>
             
	</div>


<div class="footer">
    <div class="foot"><div class="icons"><a href="https://github.com/israelhoncho/hng-test">israelhoncho</a></div><div class="icons"><a href="mailto:israelhoncho@gmail.com">israelhoncho@gmail.com</a></div><div class="icons"><a href="https://hnginterns.slack.com">nattyjay</div></div>
</div>
</div>

</body>
</html>