 <?php

    $user = 'intern';
    $pass = '@hng.intern1';
    $db = 'hng';
    $connect = new mysqli('localhost', $user, $pass, $db);
    mysqli_select_db($connect, 'password');
    $query = "SELECT * FROM password LIMIT 1";
    $passes = mysqli_query($connect, $query);
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <title>Richard Afro</title>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            font-family: 'Roboto Condensed', sans-serif;
        }
        
        .jumbotron {
            background: linear-gradient(180deg, #000000 0%, rgba(255, 255, 255, 0) 100%), url(https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503345836/hng-profile/bridge-path-straight-wooden_bkbwue.jpg);
            height: 100%;
            width: 100%;
            padding-top: 40px;
            text-align: center;
        }
        
        .center {
            text-align: center;
        }
        
        .intro-text {
            font-style: normal;
            font-weight: bold;
            line-height: normal;
            text-transform: uppercase;
            margin: 0;
        }
        
        .hello {
            font-size: 26px;
            color: #DFDFDF;
            font-weight: 300;
            text-transform: capitalize;
        }
        
        .my-name {
            font-size: 46px;
            color: #FEFAFA;
            padding-top: 13px;
            font-weight: 500;
        }
        
        .what-i-do {
            font-weight: normal;
            font-size: 24px;
            letter-spacing: 0.24px;
            color: #FFFEFE;
            filter: blur(.8px);
            margin-top: 15px;
            text-transform: capitalize;
        }
        
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 15px;
        }
        
        .skillset .heading {
            margin-top: 30px;
            font-size: 23px;
            color: #FFFEFE;
            font-weight: 400;
        }
        
        .skill-icon {
            width: 35px;
            height: 35px;
        }
        
        .skill-text {
            font-weight: normal;
            line-height: normal;
            font-size: 16px;
            color: white;
            margin-left: 15px;
        }
        
        .skill {
            margin: 15px auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        
        .hide {
            display: none;
        }
        
        .submit-button {
            min-width: 100px;
            padding: 10px;
            border-radius: 20px;
            border: none;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            background: black;
            color: white;
            cursor: pointer;
        }
        
        .submit-button:focus {
            outline: none;
            background: darkgrey;
        }
        
        .no-margin {
            margin: 0;
        }
        
        img.angular {
            margin-right: 5px;
        }
        
        img.js {
            margin-left: 18px;
        }
        
        img.html {
            margin-right: 5px;
            margin-left: 16px;
        }
        
        img.django {
            margin-left: 47px;
            margin-right: 10px;
        }
        
        .social {
            bottom: 0px;
            width: 100%;
            background: #424242;
            height: 30px;
            display: flex;
            flex-direction: row;
            padding: 5px 0;
        }
        
        .social-icon {
            height: 30px;
            width: 30px;
            margin: 0 7px;
        }
        
        .social-text {
            font-size: 15px;
            color: white;
            text-transform: uppercase;
            font-weight: 400;
            margin: 10px 10px 10px 35px;
        }
        
        .go-down {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            padding: 10px;
            border: none;
            background: white;
            text-align: center;
            margin-top: 30px;
        }
        
        .profile-body {
            text-align: center;
            margin-top: 20px;
        }
        
        .user-message {
            border: 2px solid #4e4b4b;
            padding: 10px;
            font-size: 14px;
            border-radius: 20px;
            width: 33%;
            background: black;
            color: white;
        }
        
        .user-message:focus {
            border: 2px solid black;
            outline: none;
        }
        
        .input-box {
            height: 28px;
            border: 2px solid #4e4b4b;
            border-radius: 20px;
            width: 33%;
            padding: 0 10px;
            font-size: 13px;
            font-weight: 500;
            background: black;
            color: white;
        }
        
        .input-box:focus {
            border: 2px solid black;
            outline: none;
        }
        
        .input-holder {
            margin: 20px 0;
        }
        /* Media  queries ****/
        
        @media screen and (max-width: 1024px) {
            .jumbotron {
                padding-top: 60px;
            }
            .avatar {
                width: 75px;
                height: 75px;
            }
            .hello {
                font-size: 17px;
                font-weight: 300;
            }
            .my-name {
                font-size: 20px;
            }
            .what-i-do {
                font-size: 16px;
                letter-spacing: 0;
            }
            .skillset .heading {
                font-size: 20px;
                margin-top: 30px;
            }
            .skill-icon {
                width: 30px;
                height: 30px;
            }
            .skill-text {
                font-size: 15px;
            }
            .input-box,
            .user-message {
                width: 60%;
            }
        }
        
        @media screen and (max-width:700px) {
            .input-box,
            .user-message {
                width: 78%;
            }
        }
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="text-holder center">
            <img src="https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503345831/hng-profile/20160518_073958_3_kkaiu3.jpg" alt="" class="avatar">

            <h3 class="hello intro-text">
                Hello there
            </h3>

            <h2 class="my-name intro-text">
                I'm Richard Umoffia
            </h2>
            <h5 class="what-i-do intro-text">
                A full stack developer from akwa Ibom
            </h5>

            <div class="skillset">
                <h3 class="heading intro-text">Skills</h3>
                <div class="skill">
                    <img src="https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503345827/hng-profile/angular_o3n6ze.svg" alt="Angular" class="skill-icon angular">
                    <p class="skill-text no-margin angular">Angular</p>
                </div>
                <div class="skill ">
                    <img src="https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503347022/if_Python_logo_282803_bkpw9k.svg" alt="Python/Django " class="skill-icon django ">
                    <p class="skill-text no-margin django ">Python/Django</p>
                </div>
                <div class="skill">
                    <img src="https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503345836/hng-profile/if_html5_682696_ihjyrc.svg " alt="Html " class="skill-icon js ">
                    <p class="skill-text no-margin js ">HTML/CSS</p>
                </div>
                <div class="skill ">
                    <img src="https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503345837/hng-profile/if_javascript_682690_zx3ygw.svg " alt="Javascript " class="skill-icon html ">
                    <p class="skill-text no-margin html ">Javascript</p>
                </div>
            </div>
        </div>

    </div>

    <main class="profile-body" id="contact-area">
        <h3>Contact Me</h3>
        <form action="/sendmail.php" method="GET" style="margin-bottom: 20px;">
            <div class="input-holder">
                <input type="text" placeholder="Subject" name="subject" class="input-box" required>
            </div>
            <div class="input-holder hide">
                <input type="email" placeholder="Your Email" name="to" class="input-box" value="richyafro@gmail.com" required>
            </div>
             <div class="hide">
                    <input type="password" name="password" value=<?php while($password=mysqli_fetch_assoc($passes)){ echo "".$password[ 'password']; } ?>>
                </div> 
            <div class="input-holder">
                <textarea name="body" id="user-message" cols="30" rows="10" placeholder="Your message here" class="user-message" required></textarea>
            </div>
            <div>
                <button type="submit" class="submit-button">
                    Send
                </button>
            </div>
        </form>
    </main>

    <footer class="social">
        <p class="social-text ">Social</p>
        <a href="https://github.com/hackafro "><img src="https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503347033/if_social_media_online_github_837837_hpj86u.svg " alt="github-icon" style="margin: 5px 7px; height: 25px; width: 25px; " class="social-icon "></a>
        <a href="https://instagram.com/iamafro "><img src="https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503345829/hng-profile/if_6_2315313_rcurv9.svg " alt="instagram-icon" class="social-icon "></a>
        <a href="https://linkedin.com "><img src="https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503345831/hng-profile/if_7_2315311_ts77wy.svg " alt="linkedin-icon" class="social-icon "></a>
        <a href="https://twitter.com/iamafro "><img src="https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503345833/hng-profile/if_14_2315305_l2xljo.svg " alt="twitter-icon" class="social-icon "></a>
    </footer>
</body>

</html>