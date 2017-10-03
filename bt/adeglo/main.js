
 var day = new Date();
 var time;
 var body = document.getElementById('body');
 var hello = document.getElementById('hello');
 var quote = document.getElementById('quote');

  quotes = ["Of course I'm not worried about initimidating men. The type of man who will be initmidated by me is exactly the type of man I have no interest in - Chimamanda Adichie",
"The success of every woman should be an inspiration to another, we should raise each other up. Make sure you're very courageous: be strong, be extremely kind and above all be humble - Serena Williams",
"Be kind to one another - Ellen Degeneres",
"You have to believe in yourself when no one else does - Serena Williams",
"We shine light on whatever's worst; perfection is a disease of a nation - Beyonce",
"Sometimes it takes a thousand tries to win - Rihanna",
"I stand up for what I believe in and a lot of time that can be against people's opinions - Rihanna",
"Nothing in life comes easily, everything comes with sacrifice - Rihanna",
"Yes, there is a need to encourage more women to study stem subjects and gain these in-demand skills, but there is also a need for employers to create workplaces where females employees thrive - Audrey Bach",
"The most alluring thing a woman can have is confidence - Beyonce",
"If you live your life with kindness and giving other people great energy, that beauty and great energy come back to you - Beyonce",
"Your self-worth is determined by you. You don't have to depend on someone telling you who you are - Beyonce",
"Life's too short to be sitting around miserable. You can't master your future if you're still a slave to your past - Rihanna",
"I know you're tired. I know you're physically and emotionally drained but you have to keep moving - Anonymous",
"If the plan doesn't work out, change the plan but never change the goal - Anonymous",
"Nobody is superior, nobody is inferior but nobody is equal either. Peole are simply unique, incomparable -You are you, I am I - Osho",
"Life is about balance. Be kind, but don't let people abuse you. Trust but don't be decieved. Be content, but don't stop improving yourself - Anonymous",
"In life, change is inevitable. But when someone's change is a negative impact to your aurora; letting go of that person isn't an option. Your safety is most important - Adeglo",
"Love yourself - Halilee Steinfield",
"When he hits our weakest point, we're open to the greatest change - Avatar Aang, Lenegnd of Korra ",
"The world isn't dangerous because of those who do harm but because of those who look at it without doing anything - Albert Einstein",
"People want power but not the responsibilty that comes with it - Adeglo",
"Quiet the mind and the soul will speak - Anonymous",
"I know if I'm 'bad' I would make major difference in the world. I know if I'm 'good' I would avoid making major mistakes. These thoughts have led me to the existential question,'Who am I?' - no, really... - Adeglo ",
"Life is beyond what we continue to abide in, within the mediocrity that the previous generations have embedded us in - Champion Ogunsina",
"I shiver, thinking how easy it is to be totally wrong about people, to see one tiny part of them and confuse it for the whole - Lauren Oliver ",
"The illiterates of the 21st century will not be those who cannot read or write but those who cannot unlearn the many lies they have been conditioned to believe and seekon the hidden knowledge that they have been conditioned to reject - Gavin Nascinebto"];
 
B = 5; //max size of 'cache'
N = 0;

var chooseName = function () {
    var unique = true;
    num = Math.floor(Math.random() * quotes.length - N);
    N = Math.min(N + 1, B);
    names = quotes.splice(num,1);
    quotes.push(names);
    return quote.innerHTML = names;
}




var timeDay = day.getHours();
 console.log(hello);
 
 function digitized() {
var day = new Date();
var mins = day.getMinutes();
var secs = day.getSeconds();

mins = Ticking(mins);
secs = Ticking(secs);
time = timeDay + ":" + mins + ":" + secs;

 }
//set array for getting




function Ticking(ticVal) {
    if (ticVal < 10) {
        ticVal = "0" + ticVal;
    }
    return ticVal;
}

function timeHello(){
    digitized();
   

   

    try{
		var name = document.getElementById("txtName").value;
		sessionStorage.setItem('name',name);
	}
	catch(e){
		var name = sessionStorage.getItem('name');
	}
    
    
    if(name === ""){
        name = "Stranger";
    }
    else{
        name;
    }
   
    

    if(timeDay >= 0 && timeDay < 12){
        
        console.log(timeDay);
        hello.innerHTML =  'Good Morning ' + name; 
        hello.setAttribute('class','morning');
        body.setAttribute('class','morning');
        
        hello.innerHTML +=  "<br/>  The Time is " + time ; 
    }
    else if(timeDay >= 12 && timeDay < 17){
        hello.innerHTML =  'Good Afternoon ' + name;
        hello.setAttribute('class','afternoon');
        body.setAttribute('class','afternoon');
         hello.innerHTML +=  "<br/> The Time is " + time ; 
     }
     else if(timeDay >= 17 && timeDay < 20){
        hello.innerHTML =  'Good Evening ' + name;
        hello.setAttribute('class','evening');
        body.setAttribute('class','evening');
         hello.innerHTML +=  "<br/> The Time is " + time ; 
     }
     else{
        hello.innerHTML =  'Good Night ' + name;
        hello.setAttribute('class','night');
        body.setAttribute('class','night');
         hello.innerHTML +=  "<br/> The Time is " + time ; 
     }
     var clock = setInterval(function(){
		timeHello();
    }, 1000); 

    }   

console.log(hello);
console.log(chooseName());