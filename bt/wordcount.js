function wordCount() {
	document.getElementById('word').onkeyup = function () {
<<<<<<< HEAD
	document.getElementById('result').innerHTML = "Characters: " +  this.value.length;
	};
}
=======
	var typedWord = document.getElementById('word').value;
	var abets = typedWord.match(/[a-z,A-Z]/g);
	var nums = typedWord.match(/[0-9]/g);
	var spec = typedWord.match(/[`~!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g);
	document.getElementById('total').innerHTML = "Total Characters: " +  this.value.length;
	document.getElementById('alphabets').innerHTML = "Alphabet Characters: " +  abets.length;
	document.getElementById('numbers').innerHTML = "Integer Characters: " +  nums.length;
	document.getElementById('special').innerHTML = "Special Characters: " +  spec.length;
	};

}

var hi = "g66ghy7ACB";
var res = hi.match(/[0-9, a-z]/g);
// alert(res.length);

// function wordCount() {
// 	var count = "";
// 	count = document.getElementById('word').value;
// 	var letterCount = count.length;
// 	results = document.getElementById('result');
// 	results.innerHTML = "<p>You have " + letterCount + " letters</p>";
// }

// wordCount(count);
>>>>>>> 4ac23af177372fe5641bb52e28bc5fe61cb14c7b
