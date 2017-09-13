$(document).ready(function(){
	counter = $(".con .main .rgt *#clk");
	tword = $(".con .main .rgt *#tword");
	time = 4;
	t = "Seconds";
	setInterval(function(){
		time -= 1;
		if (time < 0){
			time = 0;
			t = "Second";
		}
		if (time < 2){
			t = "Second";
		}
		counter.html(time);
		tword.html(t);
	}, 1000);
})