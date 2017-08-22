<a name="top"></a>
<?php include ('header.php'); ?>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
var timeOut;
function scrollToTop() {
	if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
		window.scrollBy(0,-50);
		timeOut=setTimeout('scrollToTop()',30);
	}
	else clearTimeout(timeOut);
}
</script>

  <div id="libraryHeader" name="libraryHeader">
        <img id="libraryBanner" name="libraryBanner" src="https://fvtelibrary.com/img/images/temp/slider1_img.jpg" alt="e library image" />
  </div>

  <h1 name="libraryheadertext">Hng.Fun Library</h1>
</br>

<main name="libraryMain" id="libraryMain">
  
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">HTML</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">CSS</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">PHP</label>
    
  <input id="tab4" type="radio" name="tabs">
  <label for="tab4">GIT</label>
    
  <section id="content1">
  <div class="library-all">
    <ul class="library-list">
      <a href="https://www.tutorialspoint.com/mysql/" target="_blank">
        <li>
          <img class="library-imas" src="images/library/mysq.png">
          <h3>mysql</h3>
          <p>
            SQL is one of the most important inventions in the software engineering world, 
            equally important to the invention of the Internet.
            Most of the Web applications today store their data in Relational Databases 
            and SQL is the ubiquitous language that is used to do this.
            No wonder its important to us that you have a basic knowledge of it. 
          </p>
        </li>
      </a>
      <a href="https://backlogtool.com/git-guide/en/stepup/stepup1_1.html" target="_blank">
        <li>
          <img class="library-imas" src="images/library/gitbash.png">
          <h3>Git tutorials</h3>
          <p>Welcome to Git Beginner's Guide for Dummies. Here, we'll teach you to master version control using Git. There are three sections in this guide. If you are completely new to Git this is the tutorial for you.</p>
        </li>
      
    </ul>
  </div>

</section>
    
<section id="content2">
<div class="library-all">
<ul class="library-list">
  
  <a href="https://www.udacity.com/course/how-to-use-git-and-github--ud775" target="_blank"> 
    <li>
      <img class="library-imas" src="images/library/gitbash.png">
      <h3>Git tutorials on udacity</h3>
      <p>Udacity's free course on How to use git and github, This course, built with input from GitHub, will introduce the basics of using version control by focusing on a particular version control system called Git and a collaboration platform called GitHub.</p>
    </li> 
  </a>
  <a href="https://git-scm.com/docs/gittutorial" target="_blank">             
    <li>
        <img class="library-imas" src="images/library/gitbash.png">
        <h3>Git Documentation</h3>
        <p>Git's own tutorial/documentation, This tutorial explains how to import a new project into Git, make changes to it, and share changes with other developers.</p>
      </li>
    </a>
  
  </ul>
</div>

</section>

<section id="content3">
<div class="library-all">
<ul class="library-list">
  
  <a href="http://gitimmersion.com/" target="_blank">
    <li>
      <img class="library-imas" src="images/library/gitbash.png">
      <h3>Git Immersion</h3>
      <p>Git Immersion Is A Guided Tour That Walks Through The Fundamentals Of Git, Inspired By The Premise That To Know A Thing Is To Do It.</p>
    </li> 
  </a>
  <a href="http://www-cs-students.stanford.edu/~blynn/gitmagic/" target="_blank">
    <li>
      <img class="library-imas" src="images/library/gitbash.png">
      <h3>Git Magic book</h3>
      <p>Git magic : Online book that takes you from beginner to pro, This tutorial is a great way to approach Git: newbies can ignore its inner workings and view Git as a gizmo that can amaze friends and infuriate enemies with its wondrous abilities. <br />

Rather than go into details, we provide rough instructions for particular effects. After repeated use, gradually you will understand how each trick works, and how to tailor the recipes for your needs.</p>
    </li>
  </a>
  <a href="https://www.webdesignerdepot.com/2009/03/intro-to-git-for-web-designers/" target="_blank">
    <li>
      <img class="library-imas" src="images/library/gitbash.png">
      <h3>Intro to Git</h3>
      <p>Intro to git for web designers, This article is a review of Git, an excellent version control system.</p>
    </li>
  </a>
</ul>
</div>

</section>
    
<section id="content4">
<div class="library-all">
<ul class="library-list">
  <a href="https://www.tutorialspoint.com/mysql/" target="_blank">
    <li>
      <img class="library-imas" src="images/library/mysq.png">
      <h3>mysql</h3>
      <p>SQL is one of the most important inventions in the software engineering world, equally important to the invention of the Internet. Most of the Web applications today store their data in Relational Databases and SQL is the ubiquitous language that is used to do this. No wonder its important to us that you have a basic knowledge of it.</p>
    </li>
  </a>
  <a href="https://backlogtool.com/git-guide/en/stepup/stepup1_1.html" target="_blank">
    <li>
      <img class="library-imas" src="images/library/gitbash.png">
      <h3>Git tutorials</h3>
      <p>Welcome to Git Beginner's Guide for Dummies. Here, we'll teach you to master version control using Git. There are three sections in this guide. If you are completely new to Git this is the tutorial for you.</p>
    </li>
  </a>
  <a href="https://www.udacity.com/course/how-to-use-git-and-github--ud775" target="_blank"> 
    <li>
      <img class="library-imas" src="images/library/gitbash.png">
      <h3>Git tutorials on udacity</h3>
      <p>Udacity's free course on How to use git and github, This course, built with input from GitHub, will introduce the basics of using version control by focusing on a particular version control system called Git and a collaboration platform called GitHub.</p>
    </li> 
  </a>
  <a href="https://git-scm.com/docs/gittutorial" target="_blank">             
    <li>
      <img class="library-imas" src="images/library/gitbash.png">
      <h3>Git Documentation</h3>
      <p>Git's own tutorial/documentation, This tutorial explains how to import a new project into Git, make changes to it, and share changes with other developers.</p>
    </li>
  </a>
  <a href="https://www.codeschool.com/courses/mastering-github" target="_blank">
    <li>
      <img class="library-imas" src="images/library/github.png">
      <h3>Github</h3>
      <p>Learn advanced tips, tricks, and proven best practices for collaborating more effectively with GitHub.</p>
    </li>
  </a>
  <a href="http://gitimmersion.com/" target="_blank">
    <li>
      <img class="library-imas" src="images/library/gitbash.png">
      <h3>Git Immersion</h3>
      <p>Git Immersion Is A Guided Tour That Walks Through The Fundamentals Of Git, Inspired By The Premise That To Know A Thing Is To Do It.</p>
    </li> 
  </a>
  <a href="http://www-cs-students.stanford.edu/~blynn/gitmagic/" target="_blank">
    <li>
      <img class="library-imas" src="images/library/gitbash.png">
      <h3>Git Magic book</h3>
      <p>Git magic : Online book that takes you from beginner to pro, This tutorial is a great way to approach Git: newbies can ignore its inner workings and view Git as a gizmo that can amaze friends and infuriate enemies with its wondrous abilities. <br />
Rather than go into details, we provide rough instructions for particular effects. After repeated use, gradually you will understand how each trick works, and how to tailor the recipes for your needs.</p>
    </li>
  </a>
  <a href="https://www.webdesignerdepot.com/2009/03/intro-to-git-for-web-designers/" target="_blank">
    <li>
      <img class="library-imas" src="images/library/gitbash.png">
      <h3>Intro to Git</h3>
      <p>Intro to git for web designers, This article is a review of Git, an excellent version control system.</p>
    </li>
  </a>
</ul>
</div>

</section>  
    
</main id="libraryMain">

<a href="#top" class="library-back-to-top" style="display: inline;" onclick="scrollToTop();return false">
  <i class="fa fa-arrow-circle-up"></i>
</a>
<?php include ('footer.php'); ?>
