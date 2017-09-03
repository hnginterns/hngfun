/*--
Author: SaintsWebnology
Author URL: http://saintswebnology.com
--*/
var ajaxRequest; // The variable that makes Ajax possible!

var requestURL = 'php/contact.php'; //request endpoint url

var form = document.getElementById('contactForm'); // Get the form

function ajaxFunction(){
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	}catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		}catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
}

function sendContactForm() {
	//This is what happens when a user tries to submit a form
	//
	var formData = new FormData(form); //get the form's data
	console.log(formData);

	ajaxFunction(); //set the XMLHttpRequest

	ajaxRequest.onreadystatechange = getResponse;

	ajaxRequest.open('post', requestURL); //open a post request to the @var requestURL

	ajaxRequest.send(formData); //send the form data to the endpoint URL
}

function getResponse() {
	if(ajaxRequest.readyState == 4) {
		//readyState 4 determines if request has been sent
		if(ajaxRequest.status == 200) {
			//200 if the request was succesful
			//
			if(ajaxRequest.responseText.length >= 2){
				//if there is a response then there is an error// get the error p tag 
				var errorBox = document.getElementById('error').document;
				errorBox.open();
				errorBox.write(ajaxRequest.responseText); //input the response as HTML
				errorBox.close();
			}else {
				// if there is no response text then the mail was sent successfully
				alert('Your message was sent successfully'); // Tell the user his message was sent successfully
			}
			console.log(ajaxRequest.responseText);
		}else{
			alert(ajaxRequest.statusText);
		}
	}
}
/*
if (form.addEventListener) {
    form.addEventListener("submit", function(evt) {
        evt.preventDefault();
        sendContactForm();
    }, true);
}
else {
    form.attachEvent('onsubmit', function(evt){
        evt.preventDefault();
        sendContactForm();
    });
}*/