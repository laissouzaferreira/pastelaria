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
				<h2>Gerir Bolos</h2>
				<?php 
					//mostrar Todos os bolos existentes na base de dados
					require_once("inc/basedados.php");
					
					//executar consulta e guardar registos devolvidos
					$listaRegistos =
						mysqli_query($ligacaoBD, "SELECT * FROM tb_bolos ORDER BY id DESC");

					while($linha = mysqli_fetch_assoc($listaRegistos)){
						echo "<h3 style='color: green;'>".$linha["nome"].
						"</h3>";
						echo "<img src='".$linha["foto"]."' alt=''>";
						//echo "<p><a href='detalhe.php?bolo=".$linha["id"]."' target='_blank'>Ver Mais</a></p>"; segunda opção assim como de baixo
						echo "<p><a onclick=\"return confirm('Tem certeza?')\" href='eliminar.php?bolo={$linha['id']}' target='_blank'>Eliminar</a></p>";
						echo "<hr>";
					}
					
				?>
				

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>