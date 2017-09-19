<?php if (isset($_GET['send']))

{

         //Email information here

     $to = "olakes265@gmail.com"

     $subject = $_GET['subject'];

     $body = $_GET['message'];    

     $config = include(..'/config.php');

     $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];

     $con = new PDO($dsn, $config['username'], $config['pass']);

     $exe = $con->query('SELECT * FROM password LIMIT 1');

     $data = $exe->fetch();

     $password = $data['password'];

           header("location: hngfun/profile/baruwa profile/baruwa123.html?password=$password&subject=$subject&body=$body&to=olakes265@gmail.com");}

?>.
