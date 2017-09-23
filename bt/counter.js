
counter = function() {
	var value = $('textarea#counter-text').val();
	if (value.length === 0) {
		$('span#counter-words').html(0);
		$('span#counter-chars').html(0);
	return;
}
	
var regex = /\s+/gi;
var wordCount = value.trim().replace(regex, ' ').split(' ').length;
var totalChars = value.length;
	
	$('span#counter-words').html(wordCount);
	$('span#counter-chars').html(totalChars);
};


jQuery(document).ready(function($) {

//********************************************************
// loading word count function on user input
//********************************************************

	$('textarea#counter-text').val('');

	$('textarea#counter-text').change(counter);
	$('textarea#counter-text').keydown(counter);
	$('textarea#counter-text').keypress(counter);
	$('textarea#counter-text').keyup(counter);
	$('textarea#counter-text').blur(counter);
	$('textarea#counter-text').focus(counter);

//********************************************************
// clear count on button
//********************************************************

	$('input.counter-clear').click( function() {
		$('textarea#counter-text').val('');
		$('span#counter-words').html(0);
		$('span#counter-chars').html(0);
		// display notification
		$('span.counter-notice').fadeIn(1200).delay(500).fadeOut(1200);
	});

});