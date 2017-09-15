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
                    <form name="contact-form" id="contact-form" method="post" action="includes/form process.php">

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

                        <!-- subject start -->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" required="" name="subject" id="senderSubject" class="input-md input-rounded form-control" placeholder="subject">
                            </div>
                        </div>
                        <!-- subject end -->


                        <!-- textarea start -->
                        <div class="col-sm-12">
                            <textarea class="form-control" required="" placeholder="your Message" name="message" id="senderMessage" rows="7"></textarea>
                        </div>
                        <!-- textarea end -->

                        <!-- button start -->
                        <div class="col-sm-12 mt10 text-center">
                            <button type="submit" name="sendMessage" id="message" class="form-control">Send Message</button>
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
