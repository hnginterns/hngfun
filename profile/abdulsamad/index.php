<!DOCTYPE html>
<html lang = "en">
  <head>
    <style>
    .header-section{
  width: 100%;
  height: 400px;
  margin: 0px;
  padding: 0px;
  background-image: url("https://scontent-lhr.xx.fbcdn.net/v/t31.0-8/19467955_1389578321110673_8249530976620479700_o.jpg?_nc_eui2=v1%3AAeFA98SKWu3TSxKaGaZRo7Fz5lrjhdTv5M95REtqpbFG1rg_EGBqArmqEl9cmunDGqR5lRN6KSdWP44W8gUGDW6Oc6sb5B_6AGSwoJRacumDkw&oh=c216052b5b6f21a614658712d1ebedfa&oe=5A547E33");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container-main{
  width: 100%;
  margin: 0;
}
body{
  font-family: helvetica;
  margin: 0 auto;
}
.navbar{
  color: white;
  position: absolute;
  margin: 0 auto;
  width: 80%;
  height: 100px;
  margin-left: 50px;
}
li{
  list-style-type: none;
  display: inline;
}
li a{
  color: white;
  text-decoration: none;
}
.left-items{
  float: left;
}
.right-items{
  float: right;
  margin-top: 40px;
}
.right-items li{
  margin-left: 20px;
  font-size: 18px;
}

.main-section{
  width: 100%;
  position: absolute;
  margin-top: -170px;
  height: 300px;
}
.body-container{
  width: 80%;
  margin: 0 auto;
  height: 900px;
}
.card-section{
  float: left;
  width: 25%;
  height: 800px;
  margin:0 auto;
  overflow: hidden;
  box-shadow: 0px 0px 15px -3px #333;
  border-radius: 2px;
}
.text-section{
  width: 100%;
  height: 100%;
  overflow:auto;
}
.works-section{
  overflow: scroll;
  float:right;
  width: 73%;
  height: 600px;
  margin-top: 200px;
  box-shadow: 0px 0px 10px -3px #333;
  border-radius: 2px;
}
.image-section{
  width: 100%;
  overflow: hidden;
}
.name{
  font-weight: lighter;
  font-size: 30px;
  text-align: center;
  color: #333;
}
.standard-header{
  font-weight: lighter;
  font-size: 27px;
  margin-left: 10px;
  color: #333;
}
.paragraph-text{
  font-weight: lighter;
  font-size: 18px;
  margin-left: 10px;
  color: #666;
}
.profile-img{
  width: 100%;
}
.footer-section{
  width: 100%;
  height: 400px;
  background-image: url("http://www.zastavki.com/pictures/originals/2013/Auto___Lamborghini_Red_Lamborghini_Aventador_037051_.jpg");
  background-attachment: fixed;
  background-position: center;
  margin-top: 700px;
  background-size: 2000px;
  background-repeat: no-repeat;
}
.footer-section-header{
  text-align: center;
}
.footer-section-header h1{
  color: #eee;
  font-size: 45px;
  font-weight: 400;
  position: relative;
  padding-top: 15px;
}
.form-section{
  width: 90%;
  margin: 0 auto;
}
.top-row-input{
  width: 100%;
}
.email-input{
  width: 49%;
  float: left;
}
.email-input input, .name-input input{
  width: 100%;
  margin: 0 auto;
  height: 50px;
  border: 0;
  background: rgba(100, 100, 100, 0.7);
  font-size: 20px;
  color: white;
}
.email-input, input::-webkit-input-placeholder{
  color: rgba(140, 140, 140, 1);
  font-size: 20px;
}
    </style>
    <title>Abdulsamad Aliyu</title>
  </head>
  <body>
    <div class ="container-main">
      <div class = "header-section">
        <div class = "navbar">
          <ul class = "left-items">
            <li>
              <h1 class = "logo">hngfun</h1>
            </li>
          </ul>
          <ul class = "right-items">
            <li><a href = "https://instagram.com/glidez007">Instagram</a></li>
            <li><a href = "https://twitter.com/nitrocoder2">Twitter</a></li>
          </ul>
        </div>
      </div>
      <div class = "main-section">
        <div class = "body-container">
          <div class = "card-section">
            <div class = "image-section">
              <img class = "profile-img" src = "https://scontent-lhr.xx.fbcdn.net/v/t1.0-9/19961412_1404538842947954_7685742084078348311_n.jpg?_nc_eui2=v1%3AAeF2R-mLeHG9nq0jyha4ghbi_WNT4PzD6jI5EgHuwarq4bhgp1BXNGPQEldxvCpNBC8vxPivuvxTakaoetHiNg3N26sq5ws7XCCrJZct5C68TQ&oh=7feb885ef64c678b619a11bf5528939b&oe=5A2053A3" alt = "my profile image"/>
            </div>
            <div class = "text-section">
              <h2 class = "name">Abdulsamad Aliyu</h2>
              <h2 class = "standard-header">About me</h2>
              <p class = "paragraph-text">My name is Abdulsamad Opeyemi Aliyu and i am a 16 year old full stack web developer, i also have a lot of experience with android development and i am going into iOS development fully now. I have participated in google code-in twice and google code jam.</p>
              <h2 class = "standard-header">Hobbies</h2>
              <p class = "paragraph-text">I love playing the guitar and also playing basketball, also singing. Apart from coding, those are my favorite things to do.</p>
            </div>
          </div>
          <div class = "works-section">
            <h2 class = "name">Major projects i have worked on or currently working on:</h2>
            <h2 class = "standard-header">Exam CBT manager</h2>
            <p class = "paragraph-text">A computer-based testing system that was built in php. The reason for building this was to fill the holes in the existing cbt systems that schools use presently such as and most importantly, simplicity. The CBT also had a lot of perks such as great design.</p>
            <h2 class = "standard-header">Friendscape</h2>
            <p class = "paragraph-text">This is currenty a work in progress. It's a social media app that i'm working on currently that helps you keep in touch with your old classmates. It does this in a very special way by letting you know where your classmates live presently and notifies you whenever they're in town or you go to their town.</p>
            <h2 class = "standard-header">Medical Records System</h2>
            <p class = "paragraph-text">This is also a work in progress built in php. It is an electronic medical records system that is similar in functionality to openMRS.</p>
            <h2 class = "standard-header">Where can you follow all my craziness?</h2>
            <p class = "paragraph-text">I am most active on instagram <a href = "https://instagram.com/glidez007">@glidez007</a> where i show all my day-to-day life with code.</p>
            <p class = "paragraph-text">Here is the link to my repo for stage 1: <a href = "https://github.com/abdulsamad234/hngstage1">Go here</a></p>
            <p class = "paragraph-text">Here is the link to my android task: <a href = "https://doc-0c-a4-docs.googleusercontent.com/docs/securesc/8csl5c0jnqt6s1netg675pcpujmfsjoe/57rjp1e9vt2l4cenlqicvceklhdpjff8/1504274400000/12491002531671411133/12491002531671411133/0B2DHngS5Ri65MDRCU2ZfWm9PU28?e=download">Go here</a></p>
          </div>
        </div>
      </div>

      <div class = "footer-section">
        <div class = "footer-section-header">
          <h1>Get in touch</h1>
        </div>
        <div class = "form-section">
          <form action = "send.php">
            <div class = "top-row-input">
              <div class = "email-input">
                <input type = "email" name = "email" placeholder="Enter your email here" style = "width: 100%;margin: 0 auto;height: 50px;border: 0;background: rgba(100, 100, 100, 0.7);font-size: 20px;color: white;">
              </div>
              <div class = "name-input" style = "width: 49%;float: right;">
                <input type = "text" name = "full_name" placeholder="Enter your full name here" style = "width: 100%;margin: 0 auto;height: 50px;border: 0;background: rgba(100, 100, 100, 0.7);font-size: 20px;color: white;">
              </div>
              <div class = "clear" style = "clear: both;"></div>
            </div>
            <div class = "bottom-row-input" style = "width: 100%;height: 150px;margin-top: 20px;margin-bottom: 20px;">
              <textarea class = "message" placeholder="Enter your message here" style = "width: 100%;height: 100%;border: 0;background: rgba(100, 100, 100, 0.7);font-size: 20px;color: white;"name = "message"></textarea>
            </div>
            <div class = "button-row-input" style = "width: 200px;height: 50px;margin: 0 auto;">
              <button class = "button" style = "margin: 0 auto;height: 100%;width: 150px;font-size: 20px;border: 0;background: #5DFAD7; cursor:pointer;">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
