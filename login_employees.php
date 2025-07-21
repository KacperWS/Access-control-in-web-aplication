<?php
session_start();
if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)) {
    header('Location: test.php');
    exit();
}
require_once "functions.php";
require_once "business.php";

if (isset($_POST['name'])) {
    $nick = $_POST['name'];
    $psw = $_POST['psw'];
    $user = findUser($nick);
	if(isset($user['name']) && $user['employee']==true){
		$test=substr($user['name'],0,2);
		if (isset($user['name']) && $user['name'] == $_POST['name'] && $_POST['employee_id']==$test) {
			if (password_verify($psw, password_hash($user['password'], PASSWORD_DEFAULT))) {
				$_SESSION['zalogowany'] = true;
				$_SESSION['user'] = $user['name'];
				$_SESSION['authorization'] = $user['role'];
				$_SESSION['employee'] = $user['employee'];
				$roles=getTable("role_rbac");
				foreach($roles as $role){
					if($user['id']==$role['user_id']){
						$_SESSION['employeeName']=$role['object_name'];
						$_SESSION['employeeAcc']=$role['access'];
						break;
					}
				}
				unset($_SESSION['blad']);
				header('Location: test.php');
			} else {
				$_SESSION['blad'] = '<span style="color:red">Nieprawid�owe has�o!</span>';
			}
		} else {
			$_SESSION['blad'] = '<span style="color:red">Nieprawidlowa nazwa lub id!</span>';
		}
	}
	else if(isset($user['name']) && $user['employee']==false){
		$_SESSION['blad'] = '<span style="color:red">Nie jestes pracownikiem! <a href="login.php">Logowanie dla uzytkownikow</a></span>';
	}
	else{
		$_SESSION['blad'] = '<span style="color:red">Nieprawidlowe dane logowania!</span>';
	}
} else
    unset($_SESSION['blad']);

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

                <label for="employee_id"> Id Pracownika:</label><br />
                <input type="text" id="employee_id" name="employee_id" required /><br /><br />
                <label for="name"> Nazwa:</label><br />
                <input type="text" id="name" name="name" required /><br />
                <label for="psw"> Haslo:</label><br />
                <input type="password" id="psw" name="psw" required /><br /><br />

                <?php
					if (isset($_SESSION['blad']))
					{
						echo '<div class="error">'.$_SESSION['blad'].'</div>';
					}
                ?>
                <input type="submit" value="Login" name="submit" />

            </form>
            <br/>
            <span>
                Nie masz jeszcze konta? <a href="register.php" style="text-decoration:none; color:#ff1744;">Zarejestruj sie</a>
            </span>

        </div>

        <div id="footer">
            <footer>
                Copyright &copy; Kacper Wszeborowski Beniamin Samujło
            </footer>
        </div>

    </div>
</body>
</html>