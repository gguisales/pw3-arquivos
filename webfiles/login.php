<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<form action="login.php" method="POST">

<h2>Login</h2>

<label for="username">Nome de usuário:</label>
<input type="text" id="username" name="username">
<label for="password">Senha:</label>
<input type="password" id="password" name="password">
<input type="submit" value="Login">

<?php
		session_start();
		require 'db.php';

		if(isset($_POST['username'], $_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
			$stmt->execute([$username]);
			$user = $stmt->fetch();

			if($user && password_verify($password, $user['password'])) {
				$_SESSION['user_id'] = $user['id'];
				header('Location: upload.php');
				exit();
			} else {
				
			} ?>
</form>

		
			

</body>


</html>