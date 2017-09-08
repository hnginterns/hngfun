<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>My Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style type = "text/css">
        .white {color: white;}

body{
        
    background: url("http://res.cloudinary.com/dpo7cxpmw/image/upload/v1503949665/background_4_thyzpr.jpg") no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    
.pic{
        
    border-radius: 10px;  
          
    }    
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
}

.textform {
  box-sizing: border-box;
  width: 60%;
  margin: auto;
}

.container {
    padding: 0 16px;
}

.title {
    color: midnightblue;
    font-size: 20px;
    font-style: oblique;
    font-weight: bold;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: white;
}

button:hover, a:hover {
    opacity: 0.7;
}

#name{
     border-radius: 4px;
    height: 30px;
            }
#subject{
     border-radius: 4px;  
    height: 30px;
            }
#message{
       border-radius: 5px;         
            }
#submit_button{
    background-color: blue;
    cursor: pointer;
    border-radius: 10px;
    height: 30px;
    width: 100px;
                
}     
#submit_button:hover {
   background-color: #3e8e41;
            
}          
            
#submit_button:active{
    background-color: #3e8e41;
    transform: translateY(4px);
    
}
.contact 
  {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 95%;
    margin-bottom: 10%;
    text-align:center;
    position: relative;
  }

  .title 
  {
    font-size: 24px;
  }
  .subheading-text{
    padding:10px;
  }
  .contact-form input,
  .contact-form textarea 
  {
    width: 80%;
    margin-top: 15px;
    padding: 12px 20px;
    border: .5px solid #ccc;
    border-radius: 5px;
    background-color: #eaeaea;
  }
  input[type=submit] 
  {
    background-color: #26acd9;
  }
  input[type=submit]:hover 
  {
    background: white;
    border: .5px solid #ccc;
    cursor: pointer;
  }
  textarea 
  {
    font-family: inherit;
    resize: none;
  }
  .social-links span 
  {
    margin-right: 30px;
  }
  .map 
  {
    margin-top: 15px;
  }
  p > span 
  {
    margin-right: 10px;
  }
  .map iframe 
  {
    width: 100%;
    height: 100%:
  }
  @media only screen and (max-width:1024px) 
  {
  .contact 
  {
    width: 90%;
  }
  .contact section 
  {
    width: 45%;
  }
  }
  @media only screen and (max-width:768px) 
  {
    .contact section 
    {
      width: 95%;
    }
  }

</style>
    </head>
    
<body>
    <br/><br/>
<div class="card">

  <img class="pic" src="http://res.cloudinary.com/dpo7cxpmw/image/upload/v1503952184/11781606_10205798226207488_5334453561013561948_n_pnbhcx.jpg" style="width:100%">
    
  <div class="container">
    <h1>Iniobong Donatus</h1>
      
    <p class = "white"; class="title">Web Developer & Mobile Application Newbie>
    <p>MD/CEO EID INT'L, Certified Project Manager with Envirofly UK, An Economists and also a Team Leader, Iniobong is also passionate to become a Web Developer, Digital Marketer, Cyber Security Expert, He is currently an Intern with Hotels.ng leveraging Start Innovation Hub as a platform.</p>
    <a href="www.twitter.com"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a> 
    <a href="www.facebook.com"><i class="fa fa-facebook"></i></a> 
    <p><button onclick="myFunction()">Contact Info</button></p>
  </div>
    <div class = "white"; id="myDIV">
        Slack: @heenie <br/>
        Github: heenie231
    </div>
    <br/>
    
    <p><a href="https://github.com/heenie231/hnginterns"> Link to Stage One Tasks</a> </p>
    </p><a href="https://drive.google.com/file/d/0B5hvstHG8ZyPaThRSC1SMHBjeUU/view?usp=sharing">My Profile App</a></p>
    
    <br/><br/>
    
     
      <div>
    <section class="contact">
    
      <section class="contact-form" >
        <div class = "card-form">
          <form  action="iniobongdonatus-submit.php" method="post" >
            <p class = "title" >CONTACT ME</p>
          
              <input type="email" class="textform" name="to" placeholder="Email address">
              <br>

              
              <input type="text" class="textform" name="subject" placeholder="Subject">
              <br>

             
              <textarea class="textform" name="body" placeholder="Write about subject" style="height:120px"></textarea>
              <br><br>

              <input type="submit" name="process" value="Submit">
          </form>
        </div>
      </section>
   </section>
  </div>
</body>
</html>
