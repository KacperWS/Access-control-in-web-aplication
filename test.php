<?php
	session_start();
	require_once "functions.php";
	if(isset($_SESSION['authorization'])==false)
		$_SESSION['authorization'] = 0;
?>	
<!DOCTYPE html>
<html lang="pl">

<?php require "head.php"; ?>

<body>

	<div id="container" class="light">
		
		<?php require "header.php"; ?>

	<div id="content" style="text-align:center;">

	<?php $authorization = $_SESSION['authorization'];  if(true): ?> <?php //$authorization == 1 || $authorization == 4 || $authorization == 6 || $authorization == 9 || $authorization == 10 ?>
		<h3>Witamy</h3>
		
		<?php 
			if (isLogged())
			{
				echo "Twoja nazwa użytkownika:<span style='font-weight:bold;'> ".$_SESSION['user']."</span><br/><br/> <a style='text-decoration:none; color:#ff1744; font-size: 20px;' href='logout.php' > Wyloguj się </a>";
				if($_SESSION['authorization'] == 10){
					echo "<br/><br/> <a style='text-decoration:none; color:#ff1744; font-size: 20px;' href='adminAuthorizations.php' > Edycja Uprawnien </a>";
				}
			}
		?>
	<?php else: ?>
		<h3>Nie masz uprawnien do dodawania zdjec, zarejestruj się lub jesli jestes zalogowany skontaktuj sie z administratorem</h3>
	<?php endif; ?>

	</div>
	
		<div id="footer">
			<footer>
				Copyright &copy; Kacper Wszeborowski Beniamin Samujło
			</footer>
		</div>
	
	</div>

</body>
</html>
