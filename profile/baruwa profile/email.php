<?php
    define("CONFIG", $_SERVER['DOCUMENT_ROOT'] . "/config.php");
    define("SEND_MAIL_SCRIPT", "/sendmail.php?");
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
            echo "enter mail, subject and message to send mail";
        }
    }

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>.
