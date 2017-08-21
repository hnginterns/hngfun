<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">

    <title><?php 
    if (isset($pageTitle)) {
        echo "HNG Interns - ".$pageTitle;
    } else {
        echo "HNG Interns";
    }
    ?>
    </title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Favicon-->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/color.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body >

<div class="landing-page__nav">
                <div class="container">

                    <!-- Logo -->
                    <div class="landing-page__nav--left">
                        <a href="http://hng.fun" class="global-nav__logo">
                            <img src="img/hnglogo.png" width="100" alt="hotels ng Internship logo">
                        </a>
                    </div>

                    <!-- right nav menu -->
                    <nav class="landing-page__nav--right">
                        <ul class="landing-page__menu">
                            <li class="landing-page__item">
                                <a class="landing-page__item--links" href="index.php">
                                    <img src="img/home.png" width="30">
                                </a>
                            </li>
                            <li class="landing-page__item">
                                <a class="landing-page__item--links" href="about.php">
                                    <img src="img/about.png" width="30">
                                </a>
                            </li>
                            <li class="landing-page__item">
                                <a class="landing-page__item--links" href="participants.php">
                                    <img src="img/participants.png" width="30">
                                </a>
                            </li>
                            <li class="landing-page__item">
                                <a class="landing-page__item--links" href="projects.php">
                                    <img src="img/projects.png" width="30">
                                </a>
                            </li>
                            <li class="landing-page__item">
                                <a class="landing-page__item--links" href="contact.php">
                                    <img src="img/contact us.png" width="30">
                                </a>
                            </li>
                            <li class="landing-page__item">
                                <a class="landing-page__item--links" href="past_internships.php">
                                    <img src="img/pastinternship.png" width="30">
                                </a>
                            </li>
                            <li class="landing-page__item">
                                <a class="landing-page__item--links" href="news.php">
                                    <img src="img/news.png" width="30">
                                </a>
                            </li>
                            <li class="landing-page__item">
                                <a class="landing-page__item--links" href="#contact">
                                    <img src="img/supporters.png" width="30">
                                </a>
                            </li>
                            <li class="landing-page__item">
                                <a class="landing-page__item--links" href="library.php">
                                    <img src="img/library.png" width="30">
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>

        </header>



        <footer class="footer">
            <div class="container">

                <div class="grid">
                    <div class="grid__col grid__col--6">
                        
                        <h4 class="footer__contact">Contact Us</h4> 
                        <p>No 3, Birrel Avenue, Off Herbert Macaulay
                        way, Sabo, Yaba Lagos</p>
                        <p>For Bookings - 0700 880 8800</p>
                        <p>email: reservations@hotels.ng</p>
                        <p>Website: <a href="https://hotels.ng">HotelsNG</a></p>
                    </div>
                    
                    <div class="grid__col grid__col--6">
                        <form method="">
                            <div class="grid">
                                <div class="grid__col grid__col--6">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>
                                <div class="grid__col grid__col--6 contact-email">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="grid">
                                <div class="grid__col grid__col--12">
                                    <textarea rows="5" name="message" placeholder="type your message here"></textarea>
                                </div>
                            </div>   
                        </form>
                    </div>
                </div>

            </div>
            <div class="clear"></div>


            <div class="footer-widget">
                <div class="grid">
                    <div class="grid__col grid__col_12">
                        <ul class="footer-widget__icons">
                            <li>
                                <a href=""><img src="img/icons/android.png" width="20"></a>
                            </li>
                            <li>
                                <a href=""><img src="img/icons/facebook.png" width="20"></a>
                            </li>
                            <li>
                                <a href=""><img src="img/icons/ios.png" width="20"></a>
                            </li>
                            <li>
                                <a href=""><img src="img/icons/twitter.png" width="20"></a>
                            </li>
                        </ul>
                    </div>
                </div>
        
        </footer>

    </main>
</body>
</html>
