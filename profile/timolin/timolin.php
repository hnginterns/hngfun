<!DOCTYPE html>
<html lang="en">

<head>
    <title>Timothy Onyiuke - HNG Intern</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="main">
        <?php if (isset($_SESSION['message']) || isset($_SESSION['success'])) { echo $_SESSION['message'] ." ". $_SESSION['success']; $_SESSION['message'] = null;} ?>
        <div class="sec1">
            <div class="img_social">
                <img src="https://ca.slack-edge.com/T3QLSP8HM-U3QNGSAG6-697679e5ab65-192" alt="Timolin">
                <p><i class="fa fa-facebook fa-lg fa-fw" aria-hidden="true"></i><a href="https://facebook.com/timmy.onyiuke">Timmy Onyiuke</a></p>
                <p><i class="fa fa-twitter fa-lg fa-fw" aria-hidden="true"></i><a href="https://twitter.com/fabrobo_">fabrobo_</a></p>
                <p><i class="fa fa-github fa-lg fa-fw" aria-hidden="true"></i><a href="https://github.com/fabrobocom">fabrobocom</a></p>
                <p><i class="fa fa-slack fa-lg fa-fw" aria-hidden="true"></i><a href="https://hnginterns.slack.com/team/timolin">timolin</a></p>
            </div>

        </div>
        <div class="sec2" style="">
            <p>I'm Timothy Onyiuke, Mid-Level Web developer. I code mostly in PHP/Laravel.</p>
            <p>Though, I spend most of my time learning about stuff I like, mostly Science..<i class="fa fa-cog fa-spin fa-fw" aria-hidden="true"></i> and of course, Coding <i class="fa fa-terminal fa-blink" aria-hidden="true"></i> :). I'm quite curious
                and I like to think of myself as someone on a mission, I love Chess and Soccer.</p>

            <p><a href="https://github.com/fabrobocom/HNG" class="stage1">Stage 1</a></p>
        </div>
        <div class="row">
            <div class="">
                <h4>Contact Form</h4>
                <div class="" style="display: none"></div>
                <form id="contact-form" class="" name="contact-form" method="GET" action="mailer.php">
                    <div class="row">
                        <div class="">
                            <div class="">
                                <input type="text" class="" name="subject" required="required" placeholder="Subject">
                            </div>
                            <div class="">
                                <textarea name="body" id="message" required="required" class="" rows="8" placeholder="Message"></textarea>
                            </div>
                            <div class="">
                                <button type="submit" class="">Send Message</button>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div><!--/.-->
        </div>
    </div>

</body>

</html>