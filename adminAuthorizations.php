<?php

session_start();
require_once "business.php";
require_once "functions.php";

$users = getTable("users");
$objects = getTable("objects");

if(isset($_SESSION['user'])==false)
	$_SESSION['authorization']=0;
else
	checkAuth();

if (isset($_POST['name'])) {
	
	$_SESSION['user_name'] = $_POST['name'];
	
	header('Location: users_permissions.php');
	exit;
}
?>


<!DOCTYPE html>
<html lang="pl">

<?php require "head.php"; ?>

<body>
		
	<div id="container" class="light">	
		
	<?php require "header.php"; ?>
	<h1>Na ciemnym motywie nie widać co jest w tabeli :D</h1>
		<h2 style="text-align: center">Twój poziom autoryzacji: <?php echo $_SESSION['authorization']; ?></h2>
		<div id="authorization" style="text-align:justify;">

            <?php if(count($users) >= 1): ?>
				<section>

				  <?php if( $_SESSION['authorization'] == 10 ):?>
					  <table>
						<tr>
							<th> Users </th>
							<th> Authorization lvl </th>
							<th> Change lvl </th>
						</tr>
						<?php foreach($users as $user): ?>
						  <?php if($user['role'] < $_SESSION['authorization']): ?>
							<tr>
								<td> <?php echo $user['name']; ?>	</td>
								<td> <?php echo $user['role']; ?>  </td>
								<td> 
                                    <form method="post">
                                        <input id="name" type="text" value="<?php echo $user['name']; ?>" hidden name="name"/>
                                        <input type="submit" value="Edytuj" name="submit" width="100%"/>
                                    </form>
								</td>
							</tr>
						  <?php endif; ?>
						<?php endforeach ?>

					  </table>
				  <?php endif ?>

					<table>
						<tr>
							<th> Objects </th>
							<th> Authorization lvl </th>
							<th> Granted </th>
						</tr>
						<?php if($objects): ?>
							<?php foreach($objects as $object): ?>
							<tr>
								<td> <?php echo $object['name']; ?> </td>
								<td> <?php echo $object['role_required']; ?> </td>
                                <?php if($object['role_required'] <= $_SESSION['authorization']): ?>
									<td> Yes </td>
								<?php else: ?>
									<td> No </td>
								<?php endif ?>
							</tr>
							<?php endforeach ?>
						<?php endif ?>

					</table>

				</section>
			<?php else: ?> 
				<p>No users exist at the moment</p>
			<?php endif ?>

		</div>
		<div id="footer">
			<footer>
				Copyright &copy; Kacper Wszeborowski Beniamin Samujło
			</footer>
		</div>

	</div>
	
</body>

</html>