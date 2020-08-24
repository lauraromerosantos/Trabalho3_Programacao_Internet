<html>
<head>
<title>Dados a deletar do aluno!</title>
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
		<div id="deletar">
			<?php
				$n_matricula=$_GET['n_matricula'];
				require("conecta.inc.php");
				$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
				$result=mysqli_query($ok, "select * from alunos where n_matricula='$n_matricula'") or die ("Não é possível retornar dados do aluno!");
				$linha=mysqli_fetch_array($result);
				$n_matricula=$linha["n_matricula"];
				$Nome=$linha["nome"];
				$Endereco=$linha["endereco"];
				$Cidade=$linha["cidade"];
				$Curso=$linha["curso"];
				print("<h3>Deletando o aluno:</h3><p>");
				print("Matrícula: $n_matricula<br>");
				print("Nome: <b>$Nome</b><br>");
				print("Endereço: $Endereco<br>");
				print("Cidade: $Cidade<br>");
				print("Curso: $Curso");
			?>
			<form action="confirma_deletar.php" method="get">
			<input type="hidden" name="n_matricula_del" value="<?php print($n_matricula)?>">
			<br><input type="submit" id="botao_deletar" value="Deletar Dados">
			</form>
			
			<p><a href="mostrar.php">Cancelar e voltar</a>
				
		</div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
</body>
</html>