<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>Login</h1>
		<nav>
			<ul>
				<li><a href="index.php">Página Inicial</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<form action="login.php" method="post">
			<label for="email">Email:</label>
			<input type="email" name="email_user" required>

			<label for="senha">Senha:</label>
			<input type="password" name="senha_user" required>

			<input type="submit" value="Login">
		</form>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				// Verifica se o email e senha são válidos
				$email = $_POST["email"];
				$senha = $_POST["senha"];

				include "config.php";

				$query = "SELECT id, nome_user FROM usuarios WHERE email_user = '$email' AND senha_user = '$senha'";
				$resultado = mysqli_query($conexao, $query);

				if (mysqli_num_rows($resultado) > 0) {
					// Se o login for válido, redireciona para a página de download
					session_start();
					$usuario = mysqli_fetch_assoc($resultado);
					$_SESSION["id_usuario"] = $usuario["id"];
					$_SESSION["nome_usuario"] = $usuario["nome"];
					header("Location: download.php");
				} else {
					// Se o login for inválido, exibe uma mensagem de erro
					echo "<p class='erro'>Email ou senha inválidos.</p>";
				}
			}
		?>
	</main>

	<footer>
		<p>&copy; 2023 Meu Site. Todos os direitos reservados.</p>
	</footer>
