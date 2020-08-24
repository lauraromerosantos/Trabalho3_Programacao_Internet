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
      <div id="conf_deletar_curso">
		<?php
			$cod=$_GET['cod_del'];
			require("conecta.inc.php");
			$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
			$resultado=mysqli_query($ok, "Select * from alunos where curso='$cod'") or die ("Não é possível consultar cursos em alunos.");
			if (mysqli_num_rows($resultado)=='')
			{
				mysqli_query($ok, "delete from curso where cod_curso='$cod'") or die ("Não é possível deletar curso!");
				print("<h3>Curso deletado com sucesso (código): $cod</h3>");
			}
			else
			{
				print("Não é possível deletar o curso (código): $cod");
				print("<br>Há alunos vinculados a ele.");
			}
		?>
		<p><a href="mostrarc.php">Voltar para cursos</a>
		</div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
 </body>
</html>