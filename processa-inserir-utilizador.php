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
				<h2>Processa Inserir Utilizador</h2>

                <?php 
                    if(isset($_POST["inserir"])){
                        //recuperar dados digitador no formulário
                        $nome = $_POST["nome"];
                        $email = $_POST["email"];
                        $username = $_POST["username"];
                        $password = md5($_POST["password"]);

                        //verificar se já existe algum utilizador com o mesmo username
                        require_once("inc/basedados.php");
                        $registosDevolvidos = mysqli_query($ligacaoBD,
                            "SELECT * FROM tb_utilizadores
                            WHERE username = '$username'");

                            //contar nr de linhas devolvidas pela SQL
                            $nrLinhas = mysqli_num_rows($registosDevolvidos);

                            if($nrLinhas > 0){
                                echo "<p>Já existe um utilizador com  o username '$username'!</p>";
                            }else{
                                //verificar se existe já o email na base de dados
                                $registosDevolvidos = mysqli_query($ligacaoBD,
                                "SELECT * FROM tb_utilizadores
                                WHERE email = '$email'");

                                //contar nr de linhas devolvidas pela SQL
                                $nrLinhas = mysqli_num_rows($registosDevolvidos);

                                if ($nrLinhas > 0) {
                                    echo "<p>Já existe um utilizador com  o email '$email'!</p>";
                                }else {
                                   //não existe username nem e-mail iguais
                                   mysqli_query($ligacaoBD,
                                   "INSERT INTO tb_utilizadores(nome, email, username, password)
                                   VALUES('$nome', '$email', '$username', '$password')"
                                   );
                                }
                            }
                    }
                ?>

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>