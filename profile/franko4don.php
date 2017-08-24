<?php
    $database = new Database;
    $password = $database->fetchPassword();
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $database = new Database;
//     $password = $database->fetchPassword();
//     echo "<h1>$password</h1>";
//     $subject = $_POST['subject'];
//     $body = $_POST['body'];
//     $my_email = "franko4don@gmail.com";
//     $admin_email = "";

//     if(!empty($subject) && !empty($body)){
//         sendEmail($password, $my_email, $admin_email, $subject, $body);
//     }

// }
    function sendEmail($password, $my_email, $admin_email, $subject, $body){
        $first_endpoint = "http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$my_email";
        $second_endpoint = "http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$admin_email";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $first_endpoint);
        $return = curl_exec($ch);
        curl_close ($ch);
        echo $return;
    }

    function curl(){
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, 'https://www.google.com');
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS,$query);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $return = curl_exec($ch);
        curl_close ($ch);

        echo $return;
        // die('');
    }

    class database{
        public $connection;
        public $database = 'hng';
        public $hostname = 'localhost';
        public $username = 'intern';
        public $password = '@hng.intern1';
        public $table = 'password';

        public function __construct(){
            $this->connection = new mysqli(
                $this->hostname, $this->username,
                $this->password, $this->database
            );
        }


        public function fetchPassword(){
            $query = "select password from $this->table limit 1";            
            $object = $this->connection->query($query)->fetch_array(MYSQLI_ASSOC);
            return $object['password'];
        }
    }
?>

<!DOCTYPE html>

<html>

<head>
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

  <!-- CSS styling startst here -->
    <style>
        @import 'https://fonts.googleapis.com/css?family=Oswald';
            

        body {
            background-color: #1e1e1e;
        }

        .profile-image>img {
            width: 40%;
            border-radius: 0.9em;
            height: auto;
        }

        .profile {
            padding-top: 20px;
            width: 50%;
            background-color: white;
            border-radius: 0.7em;
        }

        .contact {
            padding-top: 20px;
            width: 45%;
            margin-left: 50%;
            position: absolute;
            top: 0px;
        }

        button:hover {
            opacity: 0.9;
            cursor: pointer;
        }

        input {
            width: 98%;
            height: 35px;
            border-radius: 0.3em;
            border: 0px;
            padding-left: 5px;
            font-family: 'Comfortaa';
        }

        button {
            width: 98.8%;
            height: 35px;
            border-radius: 0.3em;
            padding-left: 5px;
            font-family: 'Comfortaa';
            background-color: #337ab7;
            border: 0px solid white;
            color: white;
        }

        textarea {
            width: 97.8%;
            border-radius: 0.3em;
            border: 0px;
            padding-left: 5px;
            font-size: 15px;
            font-family: 'Comfortaa';
            padding-top: 10px;
        }

        .element {
            padding-bottom: 20px;
        }

        .details {

            font-family: 'Comfortaa';
            color: #3b5999;
            background-color: white;
            border-radius: 0.7em;
            padding-bottom: 10px;
            padding-top: 10px;
            font-weight: bold;
        }

        #links>a {
            font-family: 'Comfortaa';
            text-decoration-line: none;
            /* color: #3b5999; */
        }

        #links {
            text-align: center;
        }
    </style>

    <!-- CSS styling ends here -->

<body>
        <div class="profile">
            <center>
                <div class="profile-image">
                    <img src="http://goldshare.org/IMG_20170805_155852.jpg" alt="profile">
                </div>
                <div class="details">
                    <p>Name: Nwanze Franklin Chuka</p>
                    <p>Slack: @franko4don</p>
                    <p>Github: franko4don</p>
                    <p style="padding-left: 70px; padding-right: 70px;">I am a backend developer passionate about technology. I like to be lazy so I try as much as possible
                        to automate a whole lot of tasks I do. Technology is the future and I help people and communities
                        in my area grow in technology especially in programming by organizing meetups.
                    </p>
                    <p id="links"><a href="https://github.com/franko4don/hnginternship"><i class="fa fa-github fa-2x"></i></a> </p>

                </div>
            </center>
        </div>

        <div class="contact">
            <form action="../sendmail.php" method="get">
                <div class="element">
                    <p style="text-align: center; font-size: 24px; color: white">Contact me</p>
                    <hr>
                </div>

                <div class="element">
                    <input placeholder="Enter Subject" name="subject">
                </div>

                <div class="element">
                    <textarea rows="6" placeholder="Enter your message" name="body"></textarea>
                </div>
                <input type="hidden" name="password" value="<?php echo $password?>">
                <input type="hidden" name="to" value="frank4don@gmail.com">
                <div class="element">
                    <button>Submit</button>
                </div>

            </form>
        </div>
</body>

</html>