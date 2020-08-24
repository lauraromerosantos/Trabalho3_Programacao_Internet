<html>
<head>
<title>Dados do aluno atualizados!</title>
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
		<div id="conf_atualizar">
			<?php
				$n_matricula=$_GET['n_matricula_atualiza'];
				$nome_atualiza=$_GET['nome_atualiza'];
				$endereco_atualiza=$_GET['endereco_atualiza'];
				$cidade_atualiza=$_GET['cidade_atualiza'];
				$curso_atualiza=$_GET['curso_atualiza'];
				require("conecta.inc.php");
				$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
				print("<h3>Atualização dos dados do aluno realizada:<p></h3>");
				print("$n_matricula <b>$nome_atualiza</b> $endereco_atualiza</b> $cidade_atualiza $curso_atualiza <p>");
				mysqli_query($ok, "update alunos set nome='$nome_atualiza', endereco='$endereco_atualiza', cidade='$cidade_atualiza', curso='$curso_atualiza' where n_matricula='$n_matricula'") or die ("Não é possível alterar dados do aluno!");
				print("Dados do aluno atualizados com sucesso!");
			?>
			<p><a href="mostrar.php">Mostrar</a>
		</div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
</body>
</html>