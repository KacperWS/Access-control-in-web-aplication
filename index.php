<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8"/>
	<title>Jaśminowy ogródek</title>
	<meta name="description" content="Strona poświęcona kwiatom i motylom."/>
	<meta name="keywords" content=""/>
	<meta name="author" content="s189477"/>
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet"> 
	<link href="fontAwesome/css/all.css" rel="stylesheet">
	
	<script src="js/script.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
	<noscript>
		
			<style>
				.noscript{
					display: block;
					height: 130px;
				}
				#sun{
					display: none;
				}

			</style>
			
		</noscript>
	
</head>

<body>
		
	<div id="container" class="light">	
		<div id="header">
			<header>
			
				<div class="logo">
					<img id="logo_motyl" src="img/motyl.png" alt="Logo strony" class="responsive"/> 
					<br/>Jaśminowy ogródek
				</div>
			<nav>
				<div id="nav">
					<ol>
						<li><a href="index.php"><i class="fas fa-home"></i></a></li>
						<li><a href="contact.php">Kontakt</a></li>
						<li><a href="login_choice.php" role="button"> <img width="50px" height="50px" alt="user" src="images/usericon.png"/> </a></li>
						<li><a href="#" role="button" onClick="dark()"><i id="sun" class="fas fa-moon"></i></a></li>
					</ol>
				</div>
			</nav>	
				<div class="noscript">
					<i class="fas fa-exclamation-triangle"></i><p>Strona wymaga do poprawnego działania włączonego JS.	Włącz w przeglądarce JS oraz/albo wyłącz dodatki blokujące JS, a następnie odśwież witrynę.
					<br/> 
					<span>Dziękujemy za zrozumienie i życzymy miłego korzystania z serwisu.</span><br/>
				</div>
				
			</header>
		</div>
		
		<div id="content" style="text-align:justify;">
			<section>
			
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dignissim eu nisi ac pellentesque. Vestibulum sagittis ex dui, non posuere orci rutrum sed. Aliquam consectetur in quam vitae convallis. Donec malesuada augue nisi, vitae elementum eros pellentesque eu. Mauris porta, urna a dictum tincidunt, sem erat posuere dui, sit amet condimentum dolor dui sed erat. Mauris ultricies ullamcorper mauris, sit amet placerat neque finibus quis. In luctus mauris et aliquam condimentum. Integer quis finibus mauris. Ut nec elit nibh. Ut in leo feugiat, vulputate tellus a, venenatis lorem. Nullam vel orci tristique, scelerisque turpis a, cursus lectus. Praesent egestas venenatis porttitor. Aenean accumsan tincidunt arcu vel pulvinar. Maecenas rutrum a magna et accumsan. Nullam et lacus velit. </p>

			</section>
			
		</div>
		
		<div id="footer">
			<footer>
				Copyright &copy; Kacper Wszeborowski Beniamin Samujło
			</footer>
		</div>

	</div>
	
	<script>
		document.addEventListener("DOMContentLoaded", function() {
		  tryb(); navi();
		});
	</script>
	
</body>

</html>