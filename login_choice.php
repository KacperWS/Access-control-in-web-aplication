<?php
session_start();
if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)) {
    header('Location: test.php');
    exit();
}
require_once "functions.php";
require_once "business.php";


?>
<!DOCTYPE html>
<html lang="pl">

<?php require "head.php"; ?>

<body>

    <div id="container" class="light">

        <?php require "header.php"; ?>

        <div id="content">
            <h3>Wybierz metode logowania:</h3>
            
            <section id="authorization">
                <ol id="login">
                    <li><a href="login.php"> Zaloguj sie jako użytkownik </a></li>
                    <li><a href="login_employees.php"> Zaloguj się jako pracownik </a></li>
                </ol>
            </section>

            <br/>


        </div>
        <div id="footer">
            <footer>
                Copyright &copy; Kacper Wszeborowski Beniamin Samujło
            </footer>
        </div>

    </div>

    <?php require "footer.php"; ?>

</body>
</html>