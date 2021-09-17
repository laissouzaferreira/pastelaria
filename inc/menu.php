<?php @session_start(); ?>

<nav>
	<ul>
		<li><a href='index.php'>Home</a></li>
		
		<?php
		
			if(!isset($_SESSION["utilizador"])){
				echo "<li><a href='login.php'>Login</a></li>";
			
			}else{			
				echo "<li><a href='terminar-sessao.php'>Terminar Sessão</a></li>
				<li><a href='inserir-utilizador.php'>Inserir Utilizador</a></li>
				<li><a href='inserir-bolo.php'>Inserir Bolo</a></li>
				<li><a href='gerir-bolos.php'>Gerir Bolos</a></li>";
			}
		?>
		
		<li><a href='bolos.php'>Bolos</a></li>
		<li><a href='bolachas.php'>Bolachas</a></li>
		<li><a href='https://www.cinel.pt' target="_blank">CINEL</a></li>
	</ul>
</nav>