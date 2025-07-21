<?php

session_start();
require_once "business.php";

if(!(isset($_SESSION['employee']) && $_SESSION['employee'] == true))
{
	header('Location: index.php');
	exit();
}

if((isset($_SESSION['user_name']))==false)
{
	header('Location: adminAuthorizations.php');
	exit();
}

$users = getTable("users");
$objects = getTable("objects");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   if(isset($_POST["submit"])){
        $selectedPermission = 0;
		
        if (isset($_POST["add"])) 
            $selectedPermission += $_POST["add"];
        if (isset($_POST["del"])) 
            $selectedPermission += $_POST["del"];
        if (isset($_POST["del_yours"])) 
            $selectedPermission += $_POST["del_yours"];
        
        changePermission($_SESSION['user_name'], $selectedPermission);
   }
}

?>


<!DOCTYPE html>
<html lang="pl">

<?php require "head.php"; ?>

<body>

    <div id="container" class="light">

        <?php require "header.php"; ?>

        <div id="authorization" style="text-align:justify;">
            <section>

                <form method="post">
                    <fieldset>
                        <legend>Zmiana uprawnien</legend>

                        <label for="permission1">Dodawanie zdjec</label>
                        <input type="checkbox" id="permission1" value="1" name="add" />

                        <label for="permission2">Usuwanie zdjec</label>
                        <input type="checkbox" id="permission2" value="3" name="del" />

                        <label for="permission3">Usuwanie swoich zdjec</label>
                        <input type="checkbox" id="permission3" value="5" name="del_yours" />

                        <input type="submit" value="Submit" name="submit"/>

                    </fieldset>
                </form>
            </section>
        </div>
		<h3 style="text-align:center"><a href="relocate.php">Powrót</a></h3>
        <div id="footer">
            <footer>
                Copyright &copy; Kacper Wszeborowski Beniamin Samujło
            </footer>
        </div>

    </div>

</body>

</html>