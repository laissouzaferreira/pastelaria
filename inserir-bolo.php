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
				<h2>Inserir Bolo</h2>
				
				<form enctype="multipart/form-data" action="processa-inserir-bolo.php" method="post">
					<p>
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" required>
					</p>
					
					<p>
						<label for="cobertura">Cobertura:</label>
						<select name="cobertura" id="cobertura" required>
							<option value="">Escolha um Sabor</option>
							<option value="1">Chocolate</option>
							<option value="2">Doce de Ovos</option>
							<option value="3">Chantilly</option>
							<option value="4">Bolachas</option>
						</select>
					</p>
					
					<p>
						<label for="peso">Peso:</label>
						<input type="range" name="peso" id="peso" min="0.5" max="2" value="1" step="0.5">
					</p>
					
					<p>
						<label for="cor">Cor:</label>
						<input type="color" name="cor" id="cor">
					</p>
					
					<p>
						<label for="receita">Receita:</label>
						<textarea name="receita" id="receita"></textarea>
					</p>
					
					<p>
						<label>Foto:</label>
						<input type="file" name="foto" id="foto" required >
					</p>
					
					<input type="submit" name="inserir" value ="Inserir Bolo">
				</form>

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>