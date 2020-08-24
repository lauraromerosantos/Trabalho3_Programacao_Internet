<html>
<head>
<title>Dados do aluno deletados!</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
	<div class = "menu">
		<h1>SENAC</h1>
		<nav>
			<ul>
			<li><a href="inserir.php">HOME</a></li>
			<li><a href="mostrar.php">MOSTRAR ALUNOS</a></li>
			<li><a href="mostrarc.php">MOSTRAR CURSOS</a></li>
			</ul>
		</nav>
	</div>
	</header>
	<section class = "conteudo">
		<div id="conf_deletar">
			<?php
				$n_matricula=$_GET['n_matricula_del'];
				require("conecta.inc.php");
				$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
				mysqli_query($ok, "delete from alunos where n_matricula='$n_matricula'") or die ("Não  possível deletar aluno!");
				print("<h3>Aluno deletado com sucesso (matrícula): $n_matricula</h3>");
			?>
			<p><a href="mostrar.php">Mostrar</a>
		</div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
</body>
</html>