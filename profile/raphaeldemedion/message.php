<?php
    session_start();
    require ("includes/link up.php");
?>

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


<?php
                if(isset($_SESSION['ok'])){
                    include ("includes/success.php");
                }else{
                    include ("includes/form.php");
                }
            ?>

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