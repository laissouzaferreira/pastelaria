<?php require_once("inc/acesso-restrito.php"); ?>

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
				<h2>Inserir Utilizador</h2>

				<form action='processa-inserir-utilizador.php' method="post">
					<p>
						<lable for="nome">Nome: </lable>
						<input type="text" name="nome" id="nome" require>
					</p>
					
					<p>
						<lable for="email">E-Mail: </lable>
						<input type="email" name="email" id="email" require>
					</p>

					<p>
						<lable for="username">Username: </lable>
						<input type="text" name="username" id="username" require>
					</p>

					<p>
						<lable for="password">Password: </lable>
						<input type="password" name="password" id="password" require>
					</p>
					<input type="submit" name="inserir" value="Criar Utilizador">
				</form>

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>