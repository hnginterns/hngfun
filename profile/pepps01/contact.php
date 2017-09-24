
<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST') {

      $error = [];
      //Get form-data
      $subject = $_POST['subject'];    
      $to  = 'wizitendo10@gmail.com';    
      $body = $_POST['body'];
    
      if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
      }
    
      if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
      }
    
      if(empty($error)) {
        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
      
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      
        $con = new PDO($dsn, $config['username'], $config['pass']);
      
        $exe = $con->query('SELECT * FROM password LIMIT 1');
      
        $data = $exe->fetch();
      
        $password = $data['password'];
      
        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
      
        header("location: $uri");
      }
    }
 ?>
function greetings(){
   //onscreen variabes
   let enter_name = document.getElementById('name').style.display ="none";
   let submit_name = document.getElementById('btn').style.display ="none";

   let show_greet = document.getElementById('greet');
   let show_date = document.getElementById('date');

   let recieve_name = document.getElementById('name').value;

    //get Months ,date, hour , day , minutes , time
    let greet_me =['Good Morning!','Good Afternoon!','Good Night!'];

    let days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    let months =  ["January","February","March","April","May","June","July","August","September","October","November","December"];

    let time = new Date();
    let get_year  = time.getYear();
    let get_month = months[time.getMonth()];
    let get_day   = days[time.getDay()];
    let date      =   time.getDate();
    let hours     =  time.getHours().toString();

    if (hours.length < 2) {
        hours = '0' + hours;
    }
    if (minutes.length < 2){
        minutes = '0' + minutes;
    }

    //Get greetings
    let recieve_greetings;

    if(hours < 12){
      recieve_greetings =  greet_me[0] + " " + recieve_name +"  How are you doing?" ;
    } 
    if(hours >= 12 && hours<= 17){
      recieve_greetings =  greet_me[1] + " " + recieve_name +"  How are you doing?" ;
    }
    if(hours >= 17){
      recieve_greetings =  greet_me[2] + " " + recieve_name +"  How are you doing?" ;
    }

    //GET CURRENT TIME
    let tell_time;
    tell_time = "Today's date is " + get_day + "; " + get_month + "(" + date + ") (" + hours ")";

    //display greetings

    show_date.textContent = tell_time;
    show_greet.textContent = recieve_greetings;

}
