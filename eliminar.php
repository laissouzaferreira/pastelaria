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
					
                    $bolo = $_GET["bolo"];

                    //eliminar bolo cujo ID é o passado na URL
                    mysqli_query($ligacaoBD, "DELETE FROM tb_bolos WHERE id=$bolo");

                    //voltar página anterior
                    echo "<script>window.location = 'gerir-bolos.php'</script>";
				?>
				

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>