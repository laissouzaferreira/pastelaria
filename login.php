<!doctype html>
<html lang="pt-PT">
	<head>
		<meta charset="utf-8">
		<title>Pastelaria Bolos e Bolachas</title>
		<link href="css/estilos.css" rel="stylesheet">
	</head>
	<body>
		<!-- cabeçalho -->
		<?php require_once("inc/cabecalho.php"); ?>
		
		<section>
			<!-- menu -->
			<?php require_once("inc/menu.php"); ?>
			
			<!-- conteúdo específico de cada página -->
			<article>
				<!-- conteúdo específico de cada página virá aqui dentro-->
				<h2>Login</h2>
				
				<form action="processa-login.php" method="post">
					<p>
						<label for="user">Username:</label>
						<input type="text" name="user" id="user" required>
					</p>
					
					<p>
						<label for="pass">Password:</label>
						<input type="password" name="pass" id="pass" required>
					</p>
					
					<input type="submit" name="login" value="Entrar">
				</form>
			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>