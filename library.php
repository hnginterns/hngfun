<?php 
    include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Library</title>

  <style>
    * {margin: 0; padding: 0;}

      .all {
        margin: 20px;
      }

      .list {
        list-style-type: none;
        width: 500px;
      }

      h3 {
        font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
      }

      li img {
        float: left;
        margin: 0 15px 0 0;
      }

      li p {
        font: 200 12px/1.5 Georgia, Times New Roman, serif;
      }

      li {
        padding: 10px;
        overflow: auto;
      }

      a:hover {
        background: #eee;
        cursor: pointer;
      }
      input[type=text] {
          width: 50%;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
          font-size: 16px;
          background-color: white;
          background-image: url('searchicon.png');
          background-position: 10px 10px; 
          background-repeat: no-repeat;
          padding: 12px 20px 12px 40px;
          -webkit-transition: width 0.4s ease-in-out;
          transition: width 0.4s ease-in-out;
      }

      input[type=text]:focus {
          width: 55%;
      }
      .imas{
          height:42px;
          width:42px;
      }
      .inputss{
          opacity: 1;
          text-align: center; 
          margin-top: 12%;
      }
      .space{
          height: 200px;
      }
      #search{
          text-align: center;
      }
  </style>
</head>
<body>  

  <div>
    <p class="space"></p>
    <p class="space"></p>
  </div>

  <div>
    <form id="search">
      <input class="inputss" type="text" name="search" placeholder="Search..">
    </form>
  </div>

  <div class="all">
    <ul class="list">
      <li>
        <img class="imas" src="images/library/gitbash.png">
        <h3>Git Tutorials</h3>
          <p><a href="https://backlogtool.com/git-guide/en/stepup/stepup1_1.html" target="_blank">-Git's beginner guide for dummies</a></p>
          <p><a href="https://www.udacity.com/course/how-to-use-git-and-github--ud775" target="_blank">-Udacity's free course on How to use git and github</a></p>
          <p><a href="https://git-scm.com/docs/gittutorial" target="_blank">-Git's own tutorial/documentation</a></p>
          <p><a href="http://gitimmersion.com/" target="_blank">-Git Immersion</a></p>
          <p><a href="http://www-cs-students.stanford.edu/~blynn/gitmagic/" target="_blank">-Git magic : Online book that takes you from beginner to pro.</a></p>
          <p><a href="https://www.webdesignerdepot.com/2009/03/intro-to-git-for-web-designers/" target="_blank">-Intro to git for web designers</a></p>
          <p><a href="" target="_blank">-Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
          <p><a href="" target="_blank">-Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
          <p><a href="" target="_blank">-Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
      </li>
        
      <li>
        <img class="imas" src="images/library/github.png">
        <h3>Github Tutorials</h3>
          <p><a href="http://opensourcerer.diy.org/" target="_blank">-Open Sourcerer : Takes you from your first repo to your first pull request</a></p>
          <p><a href="https://help.github.com/">-Github's own tutorial</a></p>
          <p><a href="https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/" target="_blank">-Adding a project to Github with Command Line</a></p>
          <p><a href="https://help.github.com/articles/fetching-a-remote/" target="_blank">-Working with other people's repositories</a></p>
          <p><a href="" target="_blank">-Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">-Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">-Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">-Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">-Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
      </li>

      <li>
        <img class="imas" src="images/library/mysq.png">
        <h3>MySQL Tutorials</h3>
          <p><a href="https://www.w3schools.com/SQL/deFault.asp" target="_blank">- W3Schools SQL Tutorial</a></p>
          <p><a href="https://www.tutorialrepublic.com/sql-tutorial/" target="_blank">- Tutorial Republic SQL Tutorial</a></p>
          <p><a href="https://www.tutorialspoint.com/mysql/index.htm" target="_blank">- Tutorials Point MySQL Tutorial</a></p>
          <p><a href="https://www.digitalocean.com/community/tutorials/a-basic-mysql-tutorial" target="_blank">- A Basic MySQL Tutorial</a></p>
          <p><a href="" target="_blank">- Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">- Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">- Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
      </li>

      <li>
        <img class="imas" src="images/library/php.jpg">
        <h3>PHP Tutorials</h3>
          <p><a href="https://www.w3schools.com/php/default.asp" target="_blank">- W3Schools PHP Tutorial</a></p>
          <p><a href="http://php.net/manual/en/index.php" target="_blank">- PHP Documention in a simple manual format</a></p>
          <p><a href="http://php.net/manual/en/tutorial.php" target="_blank">- A simple PHP tutorial</a></p>
          <p><a href="https://www.tutorialspoint.com/php/" target="_blank">- Tutorials Point PHP Tutorial</a></p>
          <p><a href="https://www.codecademy.com/learn/php" target="_blank">- Codecademy PHP Tutorial</a></p>
          <p><a href="https://www.tutorialrepublic.com/php-tutorial/" target="_blank">- Tutorial Republic PHP Tutorial</a></p>
          <p><a href="https://www.howtoforge.com/php_programming_basics" target="_blank">- PHP Programming Basics</a></p>
          <p><a href="" target="_blank">- Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
      </li>

      
      
    </ul>
  </div>

</body>
</html>