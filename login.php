<?php
	session_start();
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: test.php');
		exit();
	}
	require_once "functions.php";
	require_once "business.php";

	if (isset($_POST['name']))
	{
		$nick = $_POST['name'];
        $psw = $_POST['psw'];
		$user = findUser($nick);
		if(isset($user['name']) && $user['name']==$_POST['name'])
		{		
			if (password_verify($psw, password_hash($user['password'], PASSWORD_DEFAULT)))
			{
				$_SESSION['zalogowany'] = true;
				$_SESSION['user'] = $user['name'];
				$_SESSION['authorization'] = $user['role'];
				$_SESSION['employee'] = $user['employee'];				
				unset($_SESSION['blad']);
				header('Location: test.php');
			}
			else 
			{
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowe hasło!</span>';
			}
		}
		else 
		{
			$_SESSION['blad'] = '<span style="color:red">Nieprawidłowa nazwa!</span>';
		}
	}
	else unset($_SESSION['blad']);
								
?>
<!DOCTYPE html>
<html lang="pl">

<?php require "head.php"; ?>

<body>
		
	<div id="container" class="light">	
		
		<?php require "header.php"; ?>

		<div id="content">
			<h3>Logowanie:</h3>
			<form method="post">
			
				<label for="name"> Nazwa:</label><br/>
				<input type="text" id="name" name="name" required /><br/>
				<label for="psw"> Hasło:</label><br/>
				<input type="password" id="psw" name="psw" required /><br/><br/>	
				<?php
					if (isset($_SESSION['blad']))
					{
						echo '<div class="error">'.$_SESSION['blad'].'</div>';
					}
				?>
				<input type="submit" value="Login" name="submit">
				
			</form>
			<br/>	
			<span>Nie masz jeszcze konta? <a href="register.php" style="text-decoration:none; color:#ff1744;">Zarejestruj się</a></span>			
			
		</div>

		<div id="footer">
			<footer>
				Copyright &copy; Kacper Wszeborowski Beniamin Samujło
			</footer>
		</div>

	</div>
</body>
</html>