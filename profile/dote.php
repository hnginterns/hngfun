<?php
	if($_SERBER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		
		
		
	}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Emmanuel Nelson - Profile</title>
    <style>
        body{
            background-color: #fafafa;
        }
        #container{
			max-width: 1080px;
            padding: 2em;
			margin-top: 2%;
            margin-bottom: 5%;
            margin-left: auto;
            margin-right: auto;
        }
        header#head{
			border-top-right-radius: 25px;
			border-top-left-radius: 25px;
            background-color: #424242;
            color: #fafafa;
            height:50px;
			padding: 1em;
			margin-bottom:5%
            }
        .content{
            background-color: #ffffff;
            color: #424242;
        }
		.orange{
			color: #bf360c;
		}
           footer#foot{
			max-width: 1080px;
            padding-top: 5%;
            margin-bottom: 5%;
            margin-left: auto;
            margin-right: auto;
            }
        img{
            border: 0;
            max-width:100%;
        }
        a{
            text-decoration: none;
            color: #1565c0;
        }
        a:hover{
            text-decoration: underline;
        }
        h1, h2, h3, h4, h5{
            color: #424242;
            font-weight: normal;
            letter-spacing: .4em;
            text-transform: lowercase;
            }
            p{
				padding: 2em;
                text-align: justify;
            }
		h1.deep, h2.deep, h3.deep, h4.deep, h5.deep{
            color: #fafafa;
			 }
		table.links{
				border: 0;
				margin-left:auto;
				margin-right: auto;
                text-align : center;
                }
        img.icons{
                width:16px;
                height: 16px;
                }
		img.dp{
			height: 320px;
			width: 240px;
			display: block;
			margin-left: auto;
			margin-right: auto;
			border-radius: 20px;
		}
    </style>
</head>
<body>
	<div id='container'>
			<header id='head'>
				<h2 class='deep' style='text-align: center;'>Emmanuel Nelson</h2>
			</header>
			<div class='content'>
			<img class='dp' src='http://imgur.com/Zq5NFKE.jpg' alt="dot.e's photo">
			<h3 style='text-align: center;'>About Me</h3>
			<p>
				I an a student at University Of Uyo. Am fascinated with the way the web works and hence interested in web technologies and the programming languages of the world wide web especially PHP (frontend) - still among the learning folks though… I hope to use the internet to help small and medium scale enterprises expand their scope of operations.       
			</p>
			<p class='orange'>
				I am proudly from Akwa Ibom State.
			</p>
			</div>
		
	</div>
		<footer id='foot'>
			<table class='links'>
				<thead>
					<td colspan='3'><h5>Find Me on:</h5>
					</thead>
				<tr>
					<td>
						<img class='icons' src="https://cdn0.iconfinder.com/data/icons/tuts/256/slack_alt.png" alt="slack" >  <a class='links' href="https://hnginterns.slack.com/team/dot.e" target="_blank">dot.e</a></td>...
								<td><img class='icons' src="https://cdn1.iconfinder.com/data/icons/logotypes/32/github-512.png" alt="github" >  <a href="https://github.com/dot-e" target="_blank">dot-e</a></td>
								<td>
									<img class='icons' src='https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-128.png' alt='twitter' > <a class='links' href='http://twitter.com/NLIrve' target='_blank' >NLIrve</a>
								</td>
								</tr>
								</table>
				
			</footer>


</body>
</html>
