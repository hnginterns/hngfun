<?php 
    include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
</head>
<body>  
<form class="">
   <input class="inputss" type="text" name="search" placeholder="Search..">
</form>

<div class="all">
  <ul class="list">
    <li>
      <img class="imas" src="images/library/gitbash.png">
      <h3>Git tutorials</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet.</p>
    </li>
      
    <li>
      <img class="imas" src="images/library/gitbash.png">
      <h3>git tutorials</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet.</p>
    </li>

    <li>
      <img class="imas" src="images/library/mysq.png">
      <h3>mysql</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet.</p>
    </li>

    <li>
      <img class="imas" src="images/library/github.png">
      <h3>Github</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet.</p>
    </li>
  </ul>
</div>
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

li:hover {
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
</style>
</body>
</html>