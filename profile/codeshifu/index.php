<?php
    define("CONFIG", $_SERVER['DOCUMENT_ROOT'] . "/config.php");
    define("SEND_MAIL_SCRIPT", $_SERVER['HOST'] . "/sendmail.php?");

    $config = include_once CONFIG;
    
    // extract config data
    $dbname = $config['dbname'];
    $host = $config['host'];
    $pass = $config['pass'];
    $user = $config['username'];
    
    // process form submission
    if (isset($_POST['send'])) {
        $error = array();
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit("Connection Failed " . $e->getMessage());
        }
        // collect form data
        $to = filter_var($_POST['to'], FILTER_SANITIZE_STRING);
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $body = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        if (!empty($subject) && !empty($body)) {
            $stmt = $conn->prepare("SELECT * FROM password LIMIT 1");
            if ($stmt->execute()) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $adminPassword = $result['password'];

                // hng.fun/sendmail.php?password=spamblocker&subject=Hello&body=The email body&to=myemail@gmail.com
                $urlQuery = [
                    "to" => $to,
                    "subject" => $subject,
                    "body" => $body,
                    'password' => $adminPassword
                ];

                $builtURL = SEND_MAIL_SCRIPT . http_build_query($urlQuery);

                header("Location: " . $builtURL);
            }
        } else {
            // enter mail subject and message to send mail
            echo "enter mail subject and message to send mail";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>(codeshifu) Olushi Luqman</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <div id="wrapper">
        <div class="container">
            <div class="card left">
                <div class="img-overlay">
                    <img class="img-responsive" src="http://res.cloudinary.com/dsevf03vj/image/upload/v1503790413/hotelsng_ba9zsz.jpg" alt="(@codeshifu) Olushi Luqman Opemipo">
                </div>
                <div class="data">
                    <h1><span class="strong">Name:</span>
                        <span class="info">Olushi Luqman Opemipo</span>
                    </h1>
                    <h2>
                        <span class="strong">Slack:</span>
                        <span class="info">@codeshifu</span>
                    </h2>
                    <h2>
                            <span class="strong">Stage 1:</span>
                            <span class="info">
                                    <a href="https://github.com/codeshifu/hotelsng-stage1" title="Stage 1 repo">https://github.com/codeshifu/hotelsng-stage1</a>
                            </span>
                        </h2>
                    <h2>
                        <span class="strong">About:</span>
                        <span class="info">
                            A cool and simple computer programmer with lots of love for web/mobile tech.
                        </span>
                    </h2>
                </div>
            </div>
            <div id="contact-form" class="left">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" name="to" value="olushilukmon03@gmail.com">
                    <div class="input-group">
                        <label for="subject">Subject</label>
                        <input name="subject" placeholder="Enter subject" class="form-control" type="text" id="fullname">
                    </div>
                
                    <div class="input-group">
                        <label for="message">Your Message</label>
                        <textarea rows="10" placeholder="Enter message here..." name="message" class="form-control" type="text" id="fullname"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="send" class="btn" value="SEND">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>