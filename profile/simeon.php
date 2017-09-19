<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simeon | Home</title>
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  </head>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #fff;
      font-family: "Rubik", Helvetica, sans-serif;
      font-size: 18px;
    }

    a:link,
    a:visited {
      text-decoration: none;
      color: #E57373;
    }

    a:hover {
      text-decoration: underline;
      color: #7B2131;
      cursor: pointer;
    }

    textarea {
      resize: none;
    }

    .avatar {
      border-radius: 50%;
      width: 154px;
      height: 154px;
    }

    .container {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .menu {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      width: 80%;
    }

    .logo {
      font-size: 2em;
      color: #E57373;
      font-family: 'Homemade Apple', cursive;
      text-align: center;
    }

    .menu-item {
      width: 100%;
      text-align: center;
    }

    ul.menu-item {
      display: flex;
      justify-content: space-around;
      align-items: stretch;
    }

    ul.menu-item li {
      list-style-type: none;
      margin-right: 10px;
      transition: .5s;
    }

    ul.menu-item li:last-of-type {
      margin-right: 0px;
    }

    .short-bio {
      text-align: center;
      width: 60%;
      margin-top: 10px;
      margin-bottom: 30px;
    }

    .short-bio p {
      font-size: 1.4em;
    }

    .contact {
      margin-top: 30px;
      text-align: center;
      max-width: 600px;
    }

    input:not([type="submit"]),
    textarea {
      width: 100%;
      margin-top: 15px;
      padding: 10px 20px;
      border-width: 0px 0px .5px 0px;
      border-style: solid;
      border-color: #ccc;
      border-radius: 2px;
      font-family: inherit;
      transition: .5s;
    }

    input:focus,
    textarea:focus {
      border-color: #E57373;
      outline: none;
    }

    input[type=submit] {
      padding: 10px;
      margin: 15px 0 20px 0;
      border: .5px solid #ccc;
      border-radius: 5px;
      background-color: #E57373;
      font-family: inherit;
      width: 80px;
      transition: .5s ease-out;
    }

    input[type=submit]:hover {
      color: white;
      cursor: pointer;
    }

    @media only screen and (min-width: 601px) {
      .avatar {
        width: 200px;
        height: 200px;
      }
      .menu {
        width: 50%;
      }
    }
  </style>
  <!-- This was adapted from my normal online profile, and some things have been taken from it to meet the requirements
     therefore some class might not make sense -->

  <?php
    $config = include("../config.php");
    $dbname = $config["dbname"];
    $pass = $config["pass"];
    $username = $config["username"];
    $host = $config["host"];
    $db = mysqli_connect($host, $username, $pass, $dbname) or die('Error connecting to MySQL server.');
    $query = "SELECT * FROM password LIMIT 1";
    mysqli_query($db, $query) or die('Error querying database.');
    $result = mysqli_query($db, $query);
    $password = mysqli_fetch_array($result)["password"];
  ?>

    <body>

      <nav class="container">
        <div class="logo">Simeon</div>
      </nav>

      <main>
        <div class="container">
          <img class="avatar" src="https://res.cloudinary.com/simeon/image/upload/v1503343973/17188537_a7xioi.jpg" alt="simeon avatar" />
          <div class="short-bio">
            <p>Hello there, <br />My name is Simeon Adegbola<br />I am a Front-End Developer</p>
          </div>
          <div class="menu">
            <ul class="links menu-item">
              <li><a href="https://github.com/simeon979"><i data-feather="github"></i><br>simeon979</a></li>
              <li><i data-feather="slack"></i><br>simeon</li>
              <li><a href="https://github.com/simeon979/hng-stage1"><i data-feather="navigation"></i><br>Stage 1 repo</a></li>
              <li><a href="https://drive.google.com/file/d/0Bxyolg5PsJAqMWs3N2stczNJUHc/view?usp=sharing"><i data-feather="box"></i><br>App</a>
            </ul>
          </div>
          <div class="contact">
            <h3 class="heading">Say Hi</h3>
            <form method="GET" action="javascript:submit()">
              <input class="input-1" type="text" name="subject" placeholder="Subject" required>
              <input class="input-1" type="text" name="to" placeholder="Email" required>
              <textarea class="input-2" rows="5" cols="15" name="body" placeholder="What's up?" required></textarea>
              <input type="submit" value="Hit me">
            </form>
          </div>
        </div>
      </main>
      <script>
        feather.replace();
        const submit = () => {
          const subject = document.querySelector("input[name=subject]").value;
          const to = document.querySelector("input[name=to]").value;
          const body = document.querySelector("textarea[name=body]").value;
          const password = <?php echo '"' . $password . '"' ?>;
          const endpoint = `http://hng.fun/sendmail.php?password=${password}&subject=${subject}&body=${body}&to=${to}`;
          window.location.href = endpoint;
        }
      </script>
    </body>

</html>
