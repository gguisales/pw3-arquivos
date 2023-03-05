<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>Cadastro</h1>
		<nav>
			<ul>
				<li><a href="index.php">Página Inicial</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<form action="cadastro.php" method="post">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" required>

			<label for="email">Email:</label>
			<input type="email" name="email" required>

			<label for="senha">Senha:</label>
			<input type="password" name="senha" required>

			<input type="submit" value="Cadastrar">
		</form>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				// Insere o novo usuário no banco de dados
				$nome = $_POST["nome"];
				$email = $_POST["email"];
				$senha = $_POST["senha"];

				include "config.php";

				$query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
				mysqli_query($conexao, $query);

				echo "<p class='sucesso'>Usuário cadastrado com sucesso!</p>";
			}
		?>
	</main>

	<footer>
		<p>&copy; 2023 Meu Site. Todos os direitos reservados.</p>
	</footer>
</body>
</html>
