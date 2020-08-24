<html>
<head>
<title>Atualizar dados do aluno!</title>
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
      <div id="atualizar">
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
			print("<h3>Atualizando os dados do aluno:</h3><p>");
		?>
		<form action="confirma_atualizar.php" method="get">
			<div>
			Matrícula: <?php print($n_matricula)?>
			<input type="hidden" name="n_matricula_atualiza" value="<?php print($n_matricula)?>">
			</div>
			<div>
			<br>Nome: <input type="text" name="nome_atualiza" value="<?php print($Nome)?>">
			</div>
			<div>
			<br>Endereço: <input type="text" name="endereco_atualiza" value="<?php print($Endereco)?>">
			</div>
			<div>
			<br>Cidade: <input type="text" name="cidade_atualiza" value="<?php print($Cidade)?>">
			</div>
			<div>
			<br>Curso: <select name="curso_atualiza">
            <?php
            include("conectac.inc.php");
            $ok = conectac_bd() or die ("Não é possível conectar-se ao servidor.");
            $resultado=mysqli_query($ok, "Select * from curso order by nomecur") or die ("Não é possível consultar cursos.");
            while ($linha=mysqli_fetch_array($resultado))
            {
               $cod_curso=$linha["cod_curso"];
               $nomecur=$linha["nomecur"];
               print("<option value='$cod_curso'>$nomecur</option>");
            }
            ?>
			</select>
			</div>
		<p><input type="submit" id="botao_atualizar" value="Atualizar Dados">
		</form>
		<p><a href="mostrar.php">Cancelar e voltar</a>
	 </div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
</body>
</html>















<!-- teste, começa aqui a atualização-->