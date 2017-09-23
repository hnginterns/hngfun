function wordCount() {
	document.getElementById('word').onkeyup = function () {
	document.getElementById('result').innerHTML = "Characters: " +  this.value.length;
	};
}