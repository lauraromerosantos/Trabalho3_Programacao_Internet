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
      <div id="deletar_curso">
         <?php
            $cod_curso=$_GET['cod_curso'];
            $nomecur=$_GET['nomecur'];
            print("<h3>Deletando o curso:</h3><p>");
            print("Código: $cod_curso<br>");
            print("Nome: <b>$nomecur</b><br>");
         ?>
         <form action="confirma_deletarc.php" method="get">
         <input type="hidden" name="cod_del" value="<?php print($cod_curso)?>">
         <br><input type="submit" id='botao_deletar_curso' value="Deletar Dados">
         </form>
         <p><a href="mostrarc.php">Cancelar e voltar</a>
      </div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
 </body>
</html>