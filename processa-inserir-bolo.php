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
				<h2>Processa Inserir Bolo</h2>
				<?php 
					if(isset($_POST["inserir"])){
						echo "<pre>";
						var_dump($_FILES);
						echo "</pre>";
						
						$nome = $_POST["nome"];
						$cobertura = $_POST["cobertura"];
						$peso = $_POST["peso"];
						$receita = $_POST["receita"];
						$cor = $_POST["cor"];
						
						echo "<h3>Dados Recebidos</h3>";
						echo "<p>Nome do Bolo: $nome</p>";
						echo "<p>Cobertura: $cobertura</p>";
						echo "<p>Peso: $peso</p>";
						echo "<p>Receita: $receita</p>";
						echo "<p style='background-color: $cor ;'>Cor</p>";
						
						//carregar ficheiro
						$destino = "./upload/";
						$nomeOriginal = uniqid()."_".$_FILES["foto"]["name"];
						$caminho = $destino.$nomeOriginal;
						
						//mover ficheiro carregado da pasta temporária para destino
						move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho);
						
						//ver foto carregada
						echo "<img src='$caminho' alt='' >";

						//guardar informações na base de dados
						require_once("inc/basedados.php");

						$sql = "INSERT INTO tb_bolos(nome, cobertura, peso, cor, receita, foto) 
						VALUES('$nome', '$cobertura', '$peso', '$cor', '$receita', '$caminho')";

						//executar query na base de dados
						mysqli_query($ligacaoBD, $sql);

						//voltar página de inserir bolo
						echo "<script>window.location = 'inserir-bolo.php'</script>";
					}
				?>
			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>