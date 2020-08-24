<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
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
	   <div id="inserido">
		<?php
		$nome=$_GET['nome'];
		$endereco=$_GET['endereco'];
		$cidade=$_GET['cidade'];
		$curso=$_GET['curso'];
		if ($nome=='' or $curso=='')
			print("Faltou preencher algum campo...");
		else
		{
			require("conecta.inc.php");
			$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
			/*print("Inserindo o aluno:<p>");*/
			mysqli_query($ok, "insert into alunos (nome, endereco, cidade, curso) values ('$nome', '$endereco', '$cidade', '$curso')") 
			or die ("Não é possível inserir aluno!");
			print("Aluno inserido com sucesso: $nome");
		}
		?>
		<p><a href="inserir.php">Voltar</a>
		<p><a href="mostrar.php">Mostrar</a>
		</div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
 </body>
</html>		