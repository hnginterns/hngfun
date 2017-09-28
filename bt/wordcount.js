function wordCount() {
	document.getElementById('word').onkeyup = function () {
	document.getElementById('result').innerHTML = "Characters: " +  this.value.length;
	};

}

// function wordCount() {
// 	var count = "";
// 	count = document.getElementById('word').value;
// 	var letterCount = count.length;
// 	results = document.getElementById('result');
// 	results.innerHTML = "<p>You have " + letterCount + " letters</p>";
// }

// wordCount(count);