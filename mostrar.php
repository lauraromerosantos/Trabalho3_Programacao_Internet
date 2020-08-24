<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Mostrar dados dos alunos!</title>
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
	<div id ="mostrar">
		<h2>Dados dos alunos:</h2>
		<?php
			/*header('Content-Type: text/html; charset=utf-8');*/
			require("conecta.inc.php"); 
			$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
			$resultado=mysqli_query($ok, "Select * from curso, alunos where curso.cod_curso=alunos.curso order by nome");
			/*print("<body bgcolor='white'><h1><center>Mostrando os alunos...</center></h1><p>"); */
			print("<table border='2' bordercolor='black' bgcolor='darkgray' align='center'><tr><th width='100'><b>Matrícula </th>");
			print("<th width='200'>Nome </th>");
			print("<th width='200'>Endereço </th>");
			print("<th width='100'>Cidade </th>");
			print("<th width='100'>Curso</b> </th>");
			print("<th><b>Deletar</td><td><b>Atualizar</th></tr>");
			while ($linha=mysqli_fetch_array($resultado)) {
					$n_matricula=$linha["n_matricula"];
					$Nome=$linha["nome"];
					$Endereco=$linha["endereco"];
					$Cidade=$linha["cidade"];
					$Curso=$linha["nomecur"];
					print("<tr><td><center>$n_matricula </center></td>");
					print("<td>$Nome </td>");
					print("<td>$Endereco </td>");
					print("<td>$Cidade </td>");
					print("<td>$Curso </td>");  
					print("<td><a href='deletar.php?n_matricula=$n_matricula'>Deletar</a></td>");
					print("<td><a href='atualizar.php?n_matricula=$n_matricula'>Atualizar</a></td></tr>"); }
			print("</table>");
		?>	
		<div id="botoes">
		<ul>
			<li><a href="inserir.php">Inserir Aluno</a></li>
			<li><a href="mostrarc.php">Mostrar Cursos</a></li>
			<li><a href="consulta.php">Consultar Alunos</a></li>
		</ul>
		</div>	
	</div>
	<!--<div id ="botoes">
		<ul>
			<li><a href="inserir.php">Inserir Aluno</a></li>
			<li><a href="mostrarc.php">Mostrar Cursos</a></li>
			<li><a href="consulta.php">Consultar Alunos</a></li>
		</ul>
		</div>-->
</section>
<footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
</body>
</html>