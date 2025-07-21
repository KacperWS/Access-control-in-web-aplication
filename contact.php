<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8"/>
	<title>Jaśminowy ogródek</title>
	<meta name="description" content="Strona poświęcona kwiatom i motylom."/>
	<meta name="keywords" content=""/>
	<meta name="author" content="s189477"/>
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/contact_style.css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com"/>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet"/> 
	<link href="fontAwesome/css/all.css" rel="stylesheet"/>
	<style> 
		#anim {
		  width: 50px;
		  height: 50px;
		  position: relative;
		  animation: gwiazdka linear 4s infinite alternate; 
		}

		@keyframes gwiazdka {
		  from {left: 700px;}
		  to {left: 800px;}
		}
	</style>
	
	<script src="js/script.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
	<script>
		$( function() {
		$( "#tabs" ).tabs();
		} );
	</script>
	    <script>
			document.addEventListener("DOMContentLoaded", function() {
			  tryb(); navi();
			});
    </script>
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
		
		<?php require "header.php"; ?>
		
		<div id="content">
			<br/>
			<div id="tabs">
				<ul>
					<li><a href="#fragment-1"><span>Informacje</span></a></li>
					<li><a href="#fragment-2"><span>Formularz kontaktowy</span></a></li>
					<li><a href="#fragment-3"><span>Zgłaszanie problemów</span></a></li>
				</ul>
				
				<div id="fragment-1">

					Empty

				</div>
				
				<div id="fragment-2">
					
					Empty
					
				</div>
				
				<div id="fragment-3">
				
					Empty
					
				</div>
				
			</div>
			
		</div>
		
		<div id="footer">
			<footer>
				Copyright &copy; Kacper Wszeborowski Beniamin Samujło
			</footer>
		</div>
		
		<?php require "footer.php"; ?>
	
	</div>
</body>

</html>