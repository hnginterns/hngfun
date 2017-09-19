$(document).ready(function(){
	contentHolder = $(".con .main .rgt");
	pointer = $(".con .ft .lCon .mainCon a");
	Bi = $(".con .ft .lCon .mainCon #Bi");
	sendBt = $(".con .main .rgt .infoCon .fmCon .bt button");
	pageLoader = $(".con .main .overlay");
	pageTitle = "";
	contsT = "Starlyvil's Profile";
	initiate();
	director();

})
function initiate(){
	pageLoader.show("fade",{duration:0});
	contentHolder.load("content/binfo.html", function(response, status, xhr){
		if(status == "success"){
			pageLoader.hide("fade",{duration:0});
			contentHolder.show("fade",{duration:700});
		}
	});	
	Bi.addClass("selected");
}
function director(){
	pointer.on("click", function(){
		id = $(this).attr("id");
		if (id == "Bi"){
			pageTitle = contsT+" | Basic info";
		}else if (id == "Ci"){
			pageTitle = contsT+" | Contact info";
		}else if (id == "Sh"){
			pageTitle = contsT+" | Social handlers";
		}else if (id == "Cf"){
			pageTitle = contsT+" | Contact form";
		}
		current =  $(".con .ft .lCon .mainCon").find(".selected");
		current.removeClass("selected");
		$(this).addClass("selected");
		target= $(this).attr("data-target");
		
		pageLoader.show("fade",{duration:0});
		contentHolder.hide("fade",{duration:20});
		contentHolder.empty();
		
		contentHolder.load("content/"+target+".html", function(response, status, xhr){
			if(status == "success"){
				pageLoader.hide("fade",{duration:0});
				contentHolder.show("fade",{duration:700});
			}
		});		
		$("title").empty();
		$("title").html(pageTitle);
		
	})
}