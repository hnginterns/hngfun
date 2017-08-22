<?php
$pageTitle = "Past Internships";
include('header.php');
?>

</div> <!--end wrapper class in header.php -->

<style type="text/css" xmlns:http="http://www.w3.org/1999/xhtml" xmlns:http="http://www.w3.org/1999/xhtml"
       xmlns:http="http://www.w3.org/1999/xhtml" xmlns:http="http://www.w3.org/1999/xhtml"
       xmlns:http="http://www.w3.org/1999/xhtml">
    .team7-card-container {
        display: flex;
        display: -webkit-flex;
        margin: 10px 10px;
        padding: 10px;
        flex-flow: row wrap;
        -webkit-flex-flow: row wrap;
        justify-content: space-around;
        -webkit-justify-content: space-around;
    }

    .team7-card-container div {
        flex: 1 1 320px;
        -webkit-flex: 1 1 320px;
        margin: 10px;
    }

    .team7-card-container div:nth-of-type(1n+2) {
        /*margin: 10px;*/
    }
    .team7-div {
        border: 1px solid rgba(213, 213, 215, 0.92);
        border-radius: 2px;
        padding: 5px;
        background-color: #f7f7f7;
    }

    .team7-card-bg {
        background-position: center center;
        width: auto;
        height: 200px;
        background-size: cover;
    }

    @media (max-width: 768px) {

    }

    .team7-heading {
        text-align: center;
        margin: 10px;
    }

    .team7-heading h1 {
        font-weight: 600 !important;
        /*padding: 20px;*/
    }

    .team7-readmore {
        border: 2px solid ;
        width: 20px;
        height: auto;
        font-weight: 700;
        font-size: larger;
        border-radius: 2px;
        padding: 10px;
    }

    .team7-body-container {
        margin: 10px 40px;
        padding: 20px;
    }

    .team7-body-container h2 {
        font-weight: 700;
    }

    .team7-snippet {
        padding: 10px;
    }

</style>

<div class="team7-heading">
    <h1>Past Internships and Projects</h1>
</div>

<div class="team7-card-container">

    <div class="team7-div">
        <p class="team7-card-bg" style="background-image: url('http://blog.hotels.ng/wp-content/uploads/2017/01/RIP_Interns.png');"></p>
        <h3>HNG Internship 1.0</h3>
        <p class="team7-snippet">
            It was indeed a great success. Mark Esssien born and raised in Ikot
            Ekpene, founder of hotels.ng along with Neo the CTO of the company
            came up with an idea of an internship program for software developers
            and put out a tweet. So many people applied, more than hundreds.
        </p>
        <br>
        <p class="" style="margin: 10px">
            <a href="#hng-1" class="team7-readmore">
                Read More
            </a>
        </p>
    </div>

    <div class="team7-div">
        <p class="team7-card-bg" style="background-image: url('http://blog.hotels.ng/wp-content/uploads/2016/11/IMG_20161116_175013-1.jpg');"></p>
        <h3>HNG Internship 2.0</h3>
        <p class="team7-snippet">
            Due to the success of HNG 1.0, HNG 2.0 has been setup to develop
            more people in software. Remember, it is still a remote internship and
            everyone is welcome. Anticipate powerfully and watch out for this
            year’s great software developers….you don’t want to be left out.
        </p>
        <br>
        <p class="" style="margin: 10px">
            <a href="#hng-2" class="team7-readmore">
                Read More
            </a>
        </p>
    </div>

</div>

<div class="team7-body-container">
    <h2 id="hng-1">HNG Internship 1.0</h2>
    <p>
        It was indeed a great success. Mark Esssien born and raised in Ikot
        Ekpene, founder of hotels.ng along with Neo the CTO of the company
        came up with an idea of an internship program for software developers
        and put out a tweet. So many people applied, more than hundreds. He
        was convinced that people wanted to learn software development and
        so he went ahead with the plan. Well they decided they would pay but
        how were the going to do this? It was indeed a tough decision. They
        came up with an idea that it was going to be a remote internship,
        anybody could join but only those who deliver features in the course of
        the internship would get paid and they went on with the plan.
        Assignments were given stage by stage which includes;
        1. Setup git and pull and push some code which left only 80 people in
        the program.
        2. Write a bit of code (front-end mostly) and push to the repository and
        only 30 people were left.
    </p>

    <hr>

    <h2 id="hng-2">HNG Internship 2.0</h2>
    <p>
        It was indeed a great success. Mark Esssien born and raised in Ikot
        Ekpene, founder of hotels.ng along with Neo the CTO of the company
        came up with an idea of an internship program for software developers
        and put out a tweet. So many people applied, more than hundreds. He
        was convinced that people wanted to learn software development and
        so he went ahead with the plan. Well they decided they would pay but
        how were the going to do this? It was indeed a tough decision. They
        came up with an idea that it was going to be a remote internship,
        anybody could join but only those who deliver features in the course of
        the internship would get paid and they went on with the plan.
        Assignments were given stage by stage which includes;
        1. Setup git and pull and push some code which left only 80 people in
        the program.
        2. Write a bit of code (front-end mostly) and push to the repository and
        only 30 people were left.
    </p>

</div>


<?php include('footer.php'); ?>
