var day = new Date();
var timeDay = day.getHours();
var time = day.toTimeString().slice(0,5);
var body = document.getElementById('body');

hello = document.getElementById('hello');
console.log(hello);
//set array for getting


    if(timeDay >= 0 && timeDay < 12){
        
        console.log(timeDay);
        hello.innerHTML =  'Good Morning'; 
        hello.setAttribute('class','morning');
        body.setAttribute('class','morning');
        hello.innerHTML +=  "<br/>  The time is " + time ; 
    }
    else if(timeDay >= 12 && timeDay < 17){
        hello.innerHTML =  'Good Afternoon';
        hello.setAttribute('class','afternoon');
        body.setAttribute('class','afternoon');
         hello.innerHTML +=  "<br/> The time is " + time ; 
     }
     else if(timeDay >= 17 && timeDay < 20){
        hello.innerHTML =  'Good Evening';
        hello.setAttribute('class','evening');
        body.setAttribute('class','evening');
         hello.innerHTML +=  "<br/> The time is " + time ; 
     }
     else{
        hello.innerHTML =  'Good Night';
        hello.setAttribute('class','night');
        body.setAttribute('class','night');
         hello.innerHTML +=  "<br/> The time is " + time ; 
     }

console.log(hello);