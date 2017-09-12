<!DOCTYPE html>
<html lang="en">

<head>  
        <title>Raphael D'Emedion - Message Box</title>
                

        
 <!-- Core CSS
 =====================================-->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
                
</head>
    <body>



<!-- Profile
===================================== -->
        <section id="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2  col-md-offset-1 my-pic">
                        <div class="row">
                            <img src="http://res.cloudinary.com/dhcjocmox/image/upload/v1504960942/marccole_22_q9tto5.jpg" class="img-responsive" alt="raphael d'emedion">
                        </div>
                    </div>

                <div class="col-md-8 bio col-md-offset-1 my-bio">                    
                    <div class="headline">                  
                        <h1><i class="fa fa-envelope o fa-icon1x"></i> 
                        
                            <strong>Send in your message</strong>
                        </h1>
                    </div>   
        
                          
                <div class="col-md-12 contact-form">
                        <div class="form-title">
                            <div class="col-sm-12 col-xs-12 text-center cf1">
                            <h1>
                                    <small>Quick Message Box</small><br>
                            </h1>
                            <h5>Please complete the form to send a message.</h5>
                            </div>
                    <form name="contact-form" id="contact-form">

                        <!-- fullname start -->
                        <div class="col-sm-12">
                          <div class="form-group">
                                <input type="text" name="name" id="senderName" class="input-md input-rounded form-control" placeholder="full name" required="">
                            </div>
                        </div>

                        <!-- fullname end -->

                        <!-- email start -->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" id="senderEmail" class="input-md input-rounded form-control" placeholder="email address" required="">
                            </div>
                        </div>
                        <!-- email end -->

                        <!-- phone start -->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" required="" name="subject" id="senderSubject" class="input-md input-rounded form-control" placeholder="phone number">
                            </div>
                        </div>
                        <!-- phone end -->


                        <!-- textarea start -->
                        <div class="col-sm-12">
                            <textarea class="form-control" required="" placeholder="your Message" name="message" id="message" rows="7"></textarea>
                        </div>
                        <!-- textarea end -->

                        <!-- button start -->
                        <div class="col-sm-12 mt10 text-center">
                            <button type="submit" name="sendMessage" id="sendMessage" class="form-control">Send Message</button>
                        </div>
                        <!-- button end -->
                    </form>
                </div><!--form-title end -->
            </div><!-- col end -->
            </div>
        </div>
    </div>
</section>


<!-- Footer 
===================================== -->
        <section id="footer">
                <div class="container-fluid">
                    <div class="row">

                        <!-- Social Links -->
                        <div class="col-md-12">

                            <ul class="footer-links list-inline">
                                <li>
                                
                                    <a href="index.php"></i>Basic Info</a>
                                </li>
                                <li>
                                    <a href="contact.php"></i>Contact</a>
                                </li>

                                <li>
                                    <a href="social.php"></i>Social</a>
                                </li>
                                <li>
                                    <a href="message.php"></i>Message Box</a>
                                </li>                               
                            </ul>
                        </div>
                        <!-- End Social Links -->
                    </div>
                </div>
        </section>
<!--=== End Footer ===-->

<!-- Javascripts
===================================== -->
        <script src="js/jquery.min.js" type="text/javascript"></script>        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </body>
<!--=== End Body ===-->
</html>

<?php
    if (isset($_GET['sendMessage'])){
        $from = $_GET['from'];
        $to = "ememyraph19@gmail.com";
        $senderSubject = $_GET['senderSubject'];
        $senderMessage = $_GET['senderMessage'];
        $result = $con->query('SELECT password FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $messageBody = wordwrap($mess, 70);
        $header = "";
        $header .= "From: ".$from."\r\n";
        $header .= "Content-type: text/html\r\n";
        $header .= "Reply-To: ememyraph19@gmail.com."."\r\n";
        //$send = mail($to, $sub, $messageBody, $header);
        $send = 1;
        if ($send){
            $_SESSION['ok'] = "ok";
            $_SESSION['from'] = $from;
            $_SESSION['senderSubject'] = $senderSubject;
            $_SESSION['senderMessage'] = $senderMessage;
            $_SESSION['pass'] = $password;  
            $currentLoc = $_SERVER['REQUEST_URI'];
            //echo $;
            header ("location: {$currentLoc}");
        }else{
            
        }
        
        
    }
?>
