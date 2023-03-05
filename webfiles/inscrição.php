<?php
session_start();
require 'db.php';

if(isset($_POST['username'], $_POST['email'], $_POST['password'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$stmt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
	$stmt->execute([$username, $email, $password]);

	$_SESSION['user_id'] = $pdo->lastInsertId();

	header('Location: upload.php');
	exit();
} else {
	header('Location: index.php?msg=Preencha todos os campos.');
	exit();
}
?>
