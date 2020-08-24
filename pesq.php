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
      <div id="pesq">
		<?php
		$id=$_GET['id'];
		require("conecta.inc.php");
        require("conectac.inc.php");
		$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
        $ok = conectac_bd() or die ("Não é possível conectar-se ao servidor.");
		$pesquisou=false;
		if ($id==1)
		{
			$nome=$_GET['nome'];
			if (empty($nome))
				print("Preencha um nome.");
			else
			{
				$resultado=mysqli_query($ok, "Select * from alunos,curso where nome LIKE '%$nome%'and alunos.curso=curso.cod_curso") or die ("Não é possível pesquisar nome do Aluno.");
				$pesquisou=true;
			}
		}
		elseif ($id==2)
		{
			$endereco=$_GET['endereco'];
			if (empty($endereco))
				print("Preencha um endereço.");
			else
			{
				$resultado=mysqli_query($ok, "Select * from alunos,curso where endereco LIKE '%$endereco%'and alunos.curso=curso.cod_curso") or die ("Não é possível pesquisar telefone do aluno.");
				$pesquisou=true;
			}
		}
		elseif ($id==3)
		{
			$cidade=$_GET['cidade'];
			if (empty($cidade))
				print("Preencha uma cidade.");
			else
			{
				$resultado=mysqli_query($ok, "Select * from alunos,curso where cidade LIKE '%$cidade%' and alunos.curso=curso.cod_curso") or die ("Não é possível pesquisar a cidade do aluno.");
				$pesquisou=true;
			}
        
		}
		elseif ($id==4)
		{
			$curso=$_GET['curso'];
			if (empty($curso))
				print("Escolha um curso.");
			else
			{
				$resultado=mysqli_query($ok, "Select * from alunos,curso where curso = '$curso' and alunos.curso=curso.cod_curso") or die ("Não é possível pesquisar curso do aluno.");
				$pesquisou=true;
			}
		}
		else
			print("Informe um critério...");
		if($pesquisou)
			if (mysqli_num_rows($resultado)=='')
				print("Registro(s) não encontrados(s)...");
			else
				while ($linha=mysqli_fetch_array($resultado))
				{
					$n_matricula=$linha["n_matricula"];
					$Nome=$linha["nome"];
					$endereco=$linha["endereco"];
					$cidade=$linha["cidade"];
					$nomecur=$linha["nomecur"];
					print("$n_matricula - $Nome - $endereco - $cidade - $nomecur <br>");
				}
		?>
		<p>
		<a href="consulta.php">Voltar</a>
	 </div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
 </body>
</html>