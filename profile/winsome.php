<!DOCTYPE html>
<html lang="en-US>
<head>
        <metacharset="UTF-8>
        <!--hng.fun/profile/Winsome.html-->
<title>NseGod N.N.</title>

</head>
<body>
<h1>MY PROFILE</h1>

<center>
    <img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/18058073_830806640405023_7265722691586714055_n.jpg?_nc_eui2=v1%3AAeFAuVy-anoKcMQ7xp51gy3v6uVVhs_080v279ZZ0MfDpkdjKSoyiTzq0Knd_xZa8ncXSm5mFgwSUZSvOVoK2Hv0cyPob28gblzFUOOWMgEahA&oh=d3b42cc6a6f1e5bd29bba771fe491709&oe=5A4A99F4"
alt="https://web.facebook.com/photo.php?fbid=830806640405023&set=a.333738583445167.1073741826.100004270838208&type=3&theater"> 
<p id="para1">NAME:NKEREUWEM,NSEOBONG NDARAKE
    </p></center>
<center><p2>BIO:</p2>
<p class="biography">I'm a 300level student of Uniuyo,
currently studying Physiology in the 
faculty of Basic Medical Science.<br>
i'm optimistic,sociable,industrious guy,
learning software development in Hnginternship programme.<br>
I love learning new innovative ideas,open to positive changes and
love exploring new technologies.<br>
Hobby:listening to RnBs Music,cooking 
and reading motivational books.<br>
<b><em>Life Nuggett:God First....Believe You Can.</em></b></p3></center>
<center>
 <form action="/winsome.php" method="post">
 <?php $name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n email: $email \n subject: $subject \n message: $message";
$recipient = "hng.fun/sendmail.php?";
$subject = "contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die ("Error");
echo "Thank You!";
?>
        <fieldset>
    <legend>Contact Me:</legend><pre><b>
   Name:<input type="text" id="fname" name="fullname" placeholder="First & last Name...">
  Email:<input type="text" name="email" placeholder="example@gmail.com...">
Subject:<input type="text" name="subject" placeholder="Subject here...">
Message:<textarea row="40" cols="40" name="body" placeholder="Comment Here..."></textarea>
<input type="submit">
            </b></pre>
        </fieldset>
    </pre></form></center>
    <center>
        <div id="icons"><!--icon links-->
          <p>
            <a href="https://github.com/NseGod/hello-world" target="_blank">#Stage1 Repo</a>
            <a href="http://hnginterns.slack.com/team/winsome" target="_blank">
            <img src="https://cdn0.iconfinder.com/data/icons/tuts/256/slack_alt.png" alt="slack" class="icons">winsome</a> 
            <a href="https://github.com/NseGod" target="_blank">
            <img class="icons" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/github-512.png" alt="github">NseGod</a>
          </p>
        </div>
    </center>
   
</body>
<style type="text/css">
*{
    box-sizing: border-box;
}
.icons{
    width:30px;
    height:30px;
}
    input[type=text]{ 
        text-align:initial;
        width: 300px;
    padding: 5px 10px;
    margin: 2px 0;
    display: inline-block;
    border: 21px solid #ccc;
    border-radius: 9px;
    box-sizing: border-box;
    }
    legend{
        color:rgba(400,400,400,1.0);

    }
    fieldset{
        text-align:inherit;
         margin:top;
        background-color:rgba(55,8,71,0.5);
        width:40%;
        height:390px;
    }
     form{font-size:17px;
     text-align:auto;
      height:450px;
     color:rgba(00,200,200,0.9); 

    }
        h1 {
            color:white; 
            border-radius:10px; 
            border:10px solid tomato;
            border:10px; 
            background-color:mediumslateblue; 
            font-family:fantasy; 
            width:400px; 
            margin:auto; 
            font-size:300%; 
            text-align:center
        }
        p {
            
            height: 10px;
            width: 400px; 
            font-weight: lighter; 
            color: #41292C; 
            text-shadow:1px 5px 3px orangered;
             font-size:18px;
             font-family: Georgia, 'Times New Roman', Times, serif; 
             align-self: auto;            
             
        }
        #para1{
            color:rgba(300,300,200,0.9);
            height:20px;
            
            
        }
        img {
            background-size:cover;
            background-repeat: no-repeat; 
            background-position:center;
            border-radius:20px;
            box-shadow: blue,1px,0px,1px;             
            margin:300px;            
            margin-top:20px;
            margin-right: 20px;
            margin-bottom: 20px;
            margin-left:20px; 
            width:250px; 
            height:250px; 
            border:15px;
            border-color:rgb(255,20,250);
            }
        
        body {
            background-color:rgba(255,99,71,5);
            
        }
        p2 {
            width:400px;
            height:300px; 
            font-weight:lighter;
             color:bisque; 
             text-shadow:2px 2px 9px rgba(200,0,0,0.3); 
            font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif;
            box-shadow:10px,10px,5px;
        }
        .biography {
            max-height:400px;
            min-height:100px;
            max-width: 400px;
            min-width: 600px;
            margin: 5px 20px;
            border: 1px solid normal;
            padding: 30px 20px;
            text-align: center;
            height: 250px;
            width: 250px;
            background-color:rgba(55,8,81,0.1); 
            font-weight:lighter; 
            color:bisque; 
            text-shadow:1px 5px 9px black; 
            font-size:20px; 
            font-family:Georgia, 'Times New Roman', Times, serif;
            }
        class{
                width:16px;
                height:16px;
                border:0px;
                max-width:100%;
                font-family: Cambria, Cochin, Georgia, Times, Times New Roman, serif;
                font-style:initial;
                font-size:18px;
                color:aqua;
            }
            </style>
       
</html>
