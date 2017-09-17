var left  = document.getElementById("left");
var right = document.getElementById("right");

var BiographyBtn = left.getElementsByTagName("button")[0];
var ContactBtn = left.getElementsByTagName("button")[1]; 

var BiographyDiv = right.getElementsByTagName("div")[0]; 
var ContactDiv = right.getElementsByTagName("div")[1];


ContactDiv.style.display = "none";

var style = "background-color: #AADEBDEB;padding: 16px 31px;color:#000000;";

BiographyBtn.addEventListener("click",function(){
BiographyBtn.setAttribute("style",style);
ContactBtn.setAttribute("style","");
ContactDiv.style.display = "none";
BiographyDiv.style.display = "block";
});

ContactBtn.addEventListener("click",function(){
BiographyBtn.setAttribute("style","")
ContactBtn.setAttribute("style",style);
ContactDiv.style.display = "block";
BiographyDiv.style.display =  "none";
});