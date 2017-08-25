<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Simeon | Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Rubik" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  </head>

  <!-- This was adapted from my normal online profile, and some things have been taken from it to meet the requirements
     therefore some class might not make sense -->

  <?php
    $config = include("../../config.php");
    $dbname = $config["dbname"];
    $pass = $config["pass"];
    $username = $config["username"];
    $host = $config["host"];
    $db = mysqli_connect($host, $username, $pass, $dbname) or die('Error connecting to MySQL server.');
    $query = "SELECT * FROM password LIMIT 1";
    mysqli_query($db, $query) or die('Error querying database.');
    $result = mysqli_query($db, $query);
    $password = $result["password"];
  ?>

    <body>

      <nav class="container">
        <div class="logo">Simeon</div>
      </nav>

      <main>
        <div class="container">
          <img class="avatar" src="images/avatar.jpg" alt="simeon avatar" />
          <div class="short-bio">
            <p>Hello there, <br />My name is Simeon Adegbola<br />I am a Front-End Developer</p>
          </div>
          <div class="menu">
            <ul class="links menu-item">
              <li><a href="https://github.com/simeon979"><i data-feather="github"></i><br>simeon979</a></li>
              <li><i data-feather="slack"></i><br>simeon</li>
              <li><a href="https://github.com/simeon979/hng-stage1"><i data-feather="navigation"></i><br>Stage 1 repo</a></li>
            </ul>
          </div>
          <div class="contact">
            <h3 class="heading">Say Hi</h3>
            <form method="GET" action="javascript:submit()">
              <input class="input-1" type="text" name="subject" placeholder="What's your momma call you?">
              <input class="input-1" type="text" name="to" placeholder="Email">
              <textarea class="input-2" rows="5" cols="15" name="body" placeholder="What's up?"></textarea>
              <input type="submit" value="Hit me">
            </form>
          </div>
        </div>
        <p class="hidden"><?php echo $password ?></p>
      </main>
      <script>
        feather.replace();
        const submit = () => {
          const subject = document.querySelector("input[name=subject]").value;
          const to = document.querySelector("input[name=to]").value;
          const body = document.querySelector("input[name=body]").value;
          const password = document.querySelector(".hidden").innerHTML;
          const endpoint = `http://hng.fun/sendmail.php?password=${password}&subject=${subject}&body=${body}&to=${to}`;
          window.location.href = endpoint;
        }
      </script>
    </body>

</html>
