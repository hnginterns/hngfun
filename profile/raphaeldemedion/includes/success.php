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

            <div hidden= "hidden" class="urlC" data-name="<?php echo $_SESSION['name']?>" data-email="<?php echo $_SESSION['email']?>" data-subject="<?php echo $_SESSION['subject']?>" data-message="<?php echo $_SESSION['message']?>" data-pass="<?php echo $_SESSION['pass']?>" id="full"></div>
<script type="text/javascript">
	
	setTimeout(function(){
		var target = location.href;
		var senderName = document.getElementById("full").getAttribute("data-name");
		var senderEmail = document.getElementById("full").getAttribute("data-email");
                          var senderSubject = document.getElementById("full").getAttribute("data-subject");
                          var message = document.getElementById("full").getAttribute("data-message");
		var pass = document.getElementById("full").getAttribute("data-pass");
		var target = "http://hng.fun/sendmail.php?password="+pass+"&name="+senderName+"&email="+senderEmail+"&message="+senderMessage+"&to=ememyraph19@gmail.com";
		location.assign(target);
		//alert(target);
	}, 3000);
</script>
<?php
	//if($_SESSION['ok']){
		//unset($_SESSION['ok']);
		session_destroy();
	//}
?>
<div class="suc">
	<div class="sucGid">
		<div class="GID"></div>
	</div>
	<p><strong>Mail sent!</strong></p>
</div>

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