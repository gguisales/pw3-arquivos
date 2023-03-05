<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Download</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>Bem-vindo, <?php session_start(); echo $_SESSION["nome_usuario"]; ?>!</h1>
		<nav>
			<ul>
				<li><a href="index.php">Página Inicial</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<h2>Selecione um arquivo para download:</h2>
		<form action="download.php" method="post">
			<select name="arquivo">
				<option value="arquivo1.pdf">Arquivo 1</option>
				<option value="arquivo2.pdf">Arquivo 2</option>
				<option value="arquivo3.pdf">Arquivo 3</option>
			</select>
			<input type="submit" value="Download">
		</form>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				// Realiza o download do arquivo selecionado
				$arquivo = $_POST["arquivo"];
				$caminho = "arquivos/$arquivo";

				header("Content-type: application/pdf");
				header("Content-Disposition: attachment; filename=$arquivo");
				readfile($caminho);
				exit();
