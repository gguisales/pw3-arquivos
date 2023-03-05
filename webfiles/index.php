<!DOCTYPE html>
<html>
<head>
	<title>Cadastro/Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Cadastro/Login</h1>

		<?php if(isset($_GET['msg'])) echo '<p class="msg">'.$_GET['msg'].'</p>'; ?>
		
        <form action="signup.php" method="POST">
		
        <h2>Cadastro</h2>
		
            <label for="username">Nome de usuário:</label>
            <input type="text" id="username" name="username">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Cadastrar">
		</form>

	
		</form>
	</div>
</body>
</html>
