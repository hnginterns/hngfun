<?php
  // include  header made by team1
  include 'header.php';
?>

<style>

/*new*/

@media (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
}
/* Add some shadows to create a card effect */
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
/* Some left and right padding inside the container */
.container {
    padding: 0 16px;
}
/* Clear floats */
.container::after,
.row::after {
    content: "";
    clear: both;
    display: table;
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

/*new*/

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

div#team-member1 {
  text-align: right;
}
div#team-member2 {
  text-align: left;
}
.team-members {
  width: 50%;
  float: left;
  padding: 0px 30px;
}
a.view-profile-project {
  font-size: 10px;
}
h4#team-description {
  font-size: 22px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 30px;
}
.team-members li {
  line-height: 30px;
  font-style: italic;
  list-style-type: none;
}
.project-right-container {
  background: #fff !important;
  padding: 0px 60px 60px 60px !important;
  float: left;
  height: auto !important;
}
.card img {
  max-height: 90px;
}
.card p {
  line-height: 12px;
  font-size: 14.5px;
  font-style: italic;
  text-align: left;
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
/* Three columns side by side edited by @godfredakpan under Team 5 */

.column {
  float: left;
  width: 25% !important;
  margin-bottom: 30px;
  padding: 0px 10px;
}
.card .container {
  padding: 0px 5px;
}
/* Display the columns below each other instead of side by side on small screens */
@media (max-width: 768px) {
  .column {
    width: 100% !important;
    display: block;
  }
  .card img {
    max-height: 100px;
  }
  .card p {
    line-height: 22px;
    font-size: 14.5px;
    font-style: italic;
    text-align: left;
  }
}
/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}
/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
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
    <div class="project-right-container">

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


      <!-- team starts -->
      <div id="team">

        <h4 id="team-description">Team Members</h4>

        <!-- team-member1 starts -->
        <div class="team-members" id="team-member1">

              <div class="row">

                <div class="column">
                  <div class="card">
                    <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                    <div class="container">
                      <p class="title">Name goes here</p>

                      <a class="view-profile-project" href="profile/.html">View Profile</a>

                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                    <div class="container">
                      <p class="title">Name goes here</p>

                      <a class="view-profile-project" href="profile/.html">View Profile</a>

                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                    <div class="container">
                      <p class="title">Name goes here</p>

                      <a class="view-profile-project" href="profile/.html">View Profile</a>

                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                    <div class="container">
                      <p class="title">Name goes here</p>

                      <a class="view-profile-project" href="profile/.html">View Profile</a>

                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                    <div class="container">
                      <p class="title">Name goes here</p>

                      <a class="view-profile-project" href="profile/.html">View Profile</a>

                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                    <div class="container">
                      <p class="title">Name goes here</p>

                      <a class="view-profile-project" href="profile/.html">View Profile</a>

                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                    <div class="container">
                      <p class="title">Name goes here</p>

                      <a class="view-profile-project" href="profile/.html">View Profile</a>

                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                    <div class="container">
                      <p class="title">Name goes here</p>

                      <a class="view-profile-project" href="profile/.html">View Profile</a>

                    </div>
                  </div>
                </div>

              </div>

          </div>
          <!-- team-member1 ends -->

          <!-- team-member2 starts -->
          <div class="team-members" id="team-member2">

            <div class="row">

              <div class="column">
                <div class="card">
                  <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                  <div class="container">
                    <p class="title">Name goes here</p>

                    <a class="view-profile-project" href="profile/.html">View Profile</a>

                  </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                  <div class="container">
                    <p class="title">Name goes here</p>

                    <a class="view-profile-project" href="profile/.html">View Profile</a>

                  </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                  <div class="container">
                    <p class="title">Name goes here</p>

                    <a class="view-profile-project" href="profile/.html">View Profile</a>

                  </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                  <div class="container">
                    <p class="title">Name goes here</p>

                    <a class="view-profile-project" href="profile/.html">View Profile</a>

                  </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                  <div class="container">
                    <p class="title">Name goes here</p>

                    <a class="view-profile-project" href="profile/.html">View Profile</a>

                  </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                  <div class="container">
                    <p class="title">Name goes here</p>

                    <a class="view-profile-project" href="profile/.html">View Profile</a>

                  </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                  <div class="container">
                    <p class="title">Name goes here</p>

                    <a class="view-profile-project" href="profile/.html">View Profile</a>

                  </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <img src="http://placehold.it/200x150?text=No+Image" alt="" style="width:100%">
                  <div class="container">
                    <p class="title">Name goes here</p>

                    <a class="view-profile-project" href="profile/.html">View Profile</a>

                  </div>
                </div>
              </div>

            </div>

          </div>
          <!-- team-member2 ends -->

      </div>
      <!-- team ends -->

    </div>
    <!-- project-right-container ends -->

</div>
<!-- team5project-content end -->

<?php  include 'footer.php';?>
