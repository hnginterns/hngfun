<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hngtestintern";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/
?>


<?php
/*if(isset($_POST['sub']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gen = $_POST['gender'];


    $sql = "INSERT INTO hngtest (FirstName, LastName, Gender)
VALUES ('$fname', '$lname', '$gen')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Femi Odejide</title>

    <link href="bootstrap.css" rel="stylesheet"/>
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container {
            text-align: center;
            padding: 1.5em 0;
        }
        a {
            color: inherit;
            text-decoration: none;
        }

        .links {
            padding: 1em;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="col-12 col-sm-8 col-lg-8 offset-sm-2 offset-md-2">
        <img class="img" src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/19657311_10207581697620951_5131316902298210800_n.jpg?_nc_eui2=v1%3AAeG4KAKPT9bGPt8_3xXOGiWcQ7ApMq8d6t5wmjzOHjCWgGtEMnNEvNig16dNxw-xI6NzEGzf9yO7wyZU45nuHcRStY2xcx14XuWjzK5ZAPQQLA&oh=c62456c91afa77493b27c5af42dee7b7&oe=5A1C5382" alt="Femi_Odejide">
        <h1 class="display-4">Femi Odejide</h1>
        <hr>
        <p class="lead"> My name is Femi Odejide, I am a 500 level student of Transport Mangement (Aviation major) at LAUTECH. I am a a visual designer and a lover of all things tech .</p>
        <hr>
        <div>
            <a class="links" href="https://hnginterns.slack.com"><i class="fa fa-slack"></i> itz_jf </a>
            <a class="links" href="https://github.com/itzjf/My-repo-hng-intern"><i class="fa fa-github"></i> #Stage-1</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form class="form-horizontal" action="http://hng.fun/sendmail.php">
                <fieldset>
                    <legend>Contact Me</legend>
                        <div class="form-group">
                            <input type="text" name="to" id="to" class="form-control" placeholder="Email Address"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Mail Subject"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="body" id="body" rows="3" placeholder="Mail Body"></textarea>
                        </div>
                        <br/>
                        <button class="btn btn-primary" type="submit"><span class="fa fa-send"></span> &nbsp;Send</button>
                </fieldset>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>

<?php

$sql_read = "SELECT FirstName, LastName, Gender FROM hngtest";
$result = mysqli_query($conn, $sql_read);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $myfname = $row["FirstName"];
        $mylname = $row["LastName"];
        $mygender = $row["Gender"];


        ?>

        fist name = <?php echo $myfname; ?><br/>
        last name =  <?php echo $mylname; ?><br/>
        gender = <?php echo $mygender; ?><br/>
        <br/>

        <?php
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
</body>
</html>