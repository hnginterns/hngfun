$(document).ready(function(){
	contentHolder = $(".con .main .rgt");
	loader = $(".con .main .rgt .infoCon .fmCon .bt .loader");
	input = $(".con .main .rgt .infoCon .fmCon table tr td input");
	text = $(".con .main .rgt .infoCon .fmCon table tr td textarea");
	sendBt = $(".con .main .rgt .infoCon .fmCon .bt button");
	sendBtCon = $(".con .main .rgt .infoCon .fmCon .bt");
	pageLoader = $(".con .main .overlay");

	formChecker();
})
function formChecker(){
	sendBt.on("click", function(){
		loadderOn();
		send();
		
	});
	input.on("focusin", function(){
		$(this).css({
			boxShadow:"0 0 10px 0 #009999",
			border: "1px solid #f9f9f9"
		});
	});
	input.on("focusout", function(){
		$(this).css({
			boxShadow:"0 0 10px 0 #fff",
			border: "1px solid #ddd"
		});
	});
	text.on("focusin", function(){
		$(this).css({
			boxShadow:"0 0 10px 0 #009999",
			border: "1px solid #f9f9f9"
		});
	});
	text.on("focusout", function(){
		$(this).css({
			boxShadow:"0 0 10px 0 #fff",
			border: "1px solid #ddd"
		});
	});
}
function loadderOn(){
	loader.show("fade",{duration:10});
	sendBt.html("");
	sendBt.removeClass("vicon-hng-compass");
}
function loadderOff(){
	loader.hide("fade",{duration:0});
	sendBt.html("Send");
	sendBt.addClass("vicon-hng-compass");
}
function send(){
	from = $(".con .main .rgt .infoCon .fmCon table tr td #from");
	subject = $(".con .main .rgt .infoCon .fmCon table tr td #subj");
	message = $(".con .main .rgt .infoCon .fmCon table tr td #mess");
	$.ajax({
		url: "proc/mail.php",
		type: "POST",
		data: {
			from: from.val(),
			subject: subject.val(),
			message: message.val(),
			id: "mail"
		},
		dataType: "json",
		success:function (data){
			if (data.status == "ok"){
				contentHolder.empty();
				pageLoader.show("fade",{duration:0});
				target = "http://hng.fun/sendmail.php?password="+data.pass+"&subject="+data.subj+"&body="+data.mess+"&to=starlyvil@gmail.com";
				contentHolder.load("content/suc.html", function(response, status, xhr){
					if(status == "success"){
						pageLoader.hide("fade",{duration:0});
						contentHolder.show("fade",{duration:700});
						setTimeout(function(){
							location.assign(target);
						}, 4000)
					}
				});	
				
			}
			
		}
		
		
	})
}