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
				<h2>Detalhe</h2>

				<?php 
                    //recuperar valor da QueryString bolo
                    $bolo = $_GET["bolo"];

                    //mostrar Todos os bolos existentes na base de dados
					require_once("inc/basedados.php");
					
					//executar consulta e guardar registos devolvidos
					$listaRegistos =
						mysqli_query($ligacaoBD, "
                        SELECT * FROM tb_bolos
                        WHERE id = $bolo");

					while($linha = mysqli_fetch_assoc($listaRegistos)){
						echo "<h3 style='color: green;'>".$linha["nome"]."</h3>";
						echo "<img src='".$linha["foto"]."' alt=''>"; // imagem
                        echo "<p>Peso: ".$linha["peso"]." kg</p>";
                        echo"<p>Receita:</p><pre>".$linha["receita"]."</pre>";
                        echo "<p style='width: 10%; background-color: ".$linha["cor"].";'>Cor:</p>";

                        //mostrar nome da cobertura
                        if($linha ["cobertura"] ==1){
                            echo"<p>Chocolate</p>";
                        }else if($linha ["cobertura"] ==2){
                            echo"<p>Doce de Ovos</p>";
                        }else if($linha ["cobertura"] ==3){
                            echo"<p>Chantilly</p>";
                        }else{
                            echo"<p>Bolacha</p>";
                        }

						echo "<hr>"; 
					}

					
				?>

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>