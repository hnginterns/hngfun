<?php
  // include  header made by team1
  include 'header.php';
?>

<style>
.project-title-h3 {
  font-size: x-large;
  margin-top: 80px;
  margin: auto;
  padding: 5px;
  font-weight: bold;
  text-align: center;
}
#team5banner-content.row {
  padding-top: 70px;
}
div#project-content {
  background: #fff !important;
}
#team5banner-content-h1 {
  font-size: 41px !important;
  line-height: 60px;
  font-weight: 600;
  color: #111;
  padding: 0px 25px;
}
#project-header-hr {
  border-bottom: 1.5px solid #DDC580;
  opacity: 0.7;
  width: 25%;
  text-align: left;
}

/* TEAM MEMBER CARDS STYLE BEGINS */

#team5-body {
    text-align: center;
}

#top-container {
    padding: 40px;
}

.team-member-cards {
    display: flex;
    flex-direction: row;
    align-content: center; 
    justify-content: space-around;
     flex-wrap: wrap; 
      /* width: 80%;   */
    /* flex-basis: 25%; */
}

.flex-item {
      box-shadow: 0 5px 7px 1px rgba(0, 0, 0, 0.14), 0 1px 7px 1px rgba(0, 0, 0, 0.12), 0 2px 2px -1px rgba(0, 0, 0, 0.2);  
    border-radius: 15px;
    background: grey;
    margin: 15px;
}

.flex-item img {
    border-top-right-radius: 15px;
    border-top-left-radius: 15px;    
}

.details {
    padding: 10px 4px 10px 4px;
    margin: 0px;
    text-align: left;
}

.details > span:first-of-type {
    color: white;
    font-size: 15px;
    letter-spacing: 0.05em;
    margin-right: 60px; 
}

.details a {
     display: inline !important;
}

.details .fa-slack {
    color: #e01563 !important;
}

.details .fa-github {
    color: #4078c0 !important;
}

.details .fa-user {
    color: #000000 !important;
}

.member-icon {
    font-size: 17px !important;
    padding: 0px 0px 0px 5px;  
}

.team-heading {
    text-align: center !important;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin: 50px 0px 50px 0px;
}

/* TEAM MEMBERS CARDS STYLE ENDS */
a.view-profile-project {
  font-size: 10px;
}
h4#team-description {
  font-size: 22px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 30px;
}
.project-right-container {
  background: #fff !important;
  padding: 0px 60px 60px 60px !important;
  float: left;
  height: auto !important;
}
#project-content.row {
  padding-top: 100px;
  padding-bottom: 100px;
}
.project-page-header {
  font-size: 40px !important;
  font-weight: 600 !important;
  background: #fff;
  padding: 30px;
}
#project-title-h3 {
  font-size: 22px;
  padding: 30px 0px 0px 0px;
}
#project-description-header {
  font-size: 22px;
  padding: 30px 0px 10px 0px;
}
h3#team-header {
  font-size: 20px;
  font-style: italic;
}
h4.project-description {
  padding: 0px;
  line-height: 30px;
  font-size: 16px;
  text-align: justify;
  margin-bottom: 50px;
}
@media (max-width: 768px) {
  .team-members {
    width: 100% !important;
    float: left;
    padding: 0px;
  }

  .project-right-container {
    padding: 0px 30px !important;
  }

  .team-members li {
    line-height: 22px;
    font-style: italic;
    list-style-type: none;
    font-size: 12px;
  }

  h1#team5banner-content-h1 {
    font-size: 18px !important;
    margin-top: 40px;
  }

  i.fa.fa-tasks {
    font-size: 9px !important;
    margin-right: 10px;
  }

  div#team5project-content {
    background-color: #fcfcfc;
    margin-bottom: 0px;
  }

  div#team-member1 {
    text-align: left;
    margin: 20px 0px;
  }
}
.title {
  color: grey;
}
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.button:hover {
  background-color: #555;
}
/* Single Project Page CSS by Team 5 ends
===============================*/
</style>

<!-- team5banner-content starts -->
<div id="team5banner-content" class="row clearfix">
	<h1 id="team5banner-content-h1"><i class="fa fa-tasks"></i>Single Project Page</h1>
</div>
<!-- team5banner-content ends -->

<!-- team5project-content starts -->
<div id="team5project-content" class="row clearfix" style="background-color:#fcfcfc;">

    <!-- project-right-container starts -->
    <!-- <div class="project-right-container"> -->

      <!-- project-header starts -->
      <div id="project-header">

          <div class="project-title-h3">

            <h3 id="project-title-h3">Project Title: <br></h3>

            <h4 id="project-title">
                <!-- Project title goes here -->
                xyz project
            </h4>

            <hr id="project-header-hr">

          </div>

      </div>
      <!-- project-header ends -->

      <!-- content-holder starts -->
      <div class="content-holder" class="clearfix">

          <h3 id="project-description-header">Project Description: </h3>

          <h4 class="project-description">
            <!-- Project Description goes here -->

            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..

          </h4>

      </div>
      <!--  content-holder ends -->

      <!-- RESPONSIVE TEAM CARDS BEGIN -->

      <div id="top-container">
    <h3 class="team-heading"> Front-end Team Members</h3>
        <div class="team-member-cards">
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
         </div> 
         <div class="team-member-cards">     
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
         </div> 

        <h3 class="team-heading"> Back-end Team Members</h3>

          <div class="team-member-cards">  
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
          </div>  
          <div class="team-member-cards">      
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
            <div class="team-cards flex-item">
                <img src="http://image.ibb.co/nNoDhQ/no_avatar.jpg" alt="Front-end member picture" width="250" height="200">
                <div class="details">
                    <span>member name</span> 
                    <a href="http://hnginterns.slack.com"><span class="fa fa-slack member-icon"></span></a>
                    <a href="http://www.github.com"><span class="fa fa-github member-icon"></span></a>  
                    <a href="http://hng.fun/profile/"><span class="fa fa-user member-icon"></span></a>                                      
                </div>
            </div>
         </div> 
    </div>

    <!-- RESPONSIVE TEAM CARDS ENDS -->

    <!-- </div> -->
    <!-- project-right-container ends -->

</div>
<!-- team5project-content end -->

<?php  include 'footer.php';?>
