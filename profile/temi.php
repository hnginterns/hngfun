
<!DOCTYPE html>
<html>
<head>
	<title>Temi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.8.0/css/tachyons.min.css"/>
	<style type="text/css">
		div{
			padding: 4em;
			border: 4em;
		}
	</style>
</head>
<body>
	<section id="mw7 center">	
	 <article class="pv4 bb b--black-10 ph3 ph0-l">
	    <div class="flex flex-column flex-row-ns">
	      <div class="w-100 w-60-ns pr3-ns order-2 order-1-ns">
	        <h1 class="f3 athelas mt0 lh-title">Temi Rufai</h1>
	        <h2 class="f3 athelas mt0 lh-title">@temi on slack, check <a href="https://github.com/hnginterns/getting-started-h2-2017/blob/master/contributors.txt">Number 101 </a> in stage one</h2>
	        <p class="f5 f4-l lh-copy athelas">
	         This is Temi, he's king in his room. Rider of bicycles and lover of books, speaker of 2 languages. He has hope of climbing Everest!
	        </p>
	      </div>
	      <div class="pl3-ns order-1 order-2-ns mb4 mb0-ns w-100 w-40-ns">
	        <img src="https://github.com/rufai/rufai.github.io/blob/master/temi.jpg?raw=true" class="db" alt="Photo of a whale's tale coming crashing out of the water.">
	      </div>
	    </div>	    
	  </article>

	  <form   action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
	  	<span> id="noni">
	  		<label for="Subject"></label>
	  		<input type="text" name="Subject" placeholder="What is this about?">
	  	</span>    
	  	<span> id="noni">
	  		<label for="mail"></label>
	  		<input type="email" name="mail" placeholder="Your email">
	  	</span>    
	  	<span> id="noni">
	  		<label for="message"></label>
	  		<textarea type="text" name="message" placeholder="Your message"></textarea>
	  	</span>    
	  	<!-- <button>Send</button> -->
		  <input type="submit" name="submit" value="submit">
	  </form>
	</section>
</body>
</html>