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
      <div id="cursos">
         <?php
         require("conecta.inc.php");
         $ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
         $resultado=mysqli_query($ok, "Select * from curso order by nomecur") or die ("Não é possível consultar cursos.");
         print("<center><h2>MOSTRANDO OS CURSOS</h2>");
         print("<table border='2' bordercolor='black' bgcolor='darkgray'>");
         print("<tr><td><b>Código</td>");
         print("<td><b>Nome</td>");
         print("<td><b>Deletar</td>");
         while ($linha=mysqli_fetch_array($resultado))  
         {
            $cod_curso=$linha["cod_curso"];
            $nomecur=$linha["nomecur"];
            print("<tr><td align='center'>$cod_curso</td>");
            print("<td>$nomecur</td>");
            print("<td><a href='deletarc.php?cod_curso=$cod_curso&nomecur=$nomecur'>Deletar</a></td>");
         }
            print("</table></center>");
         ?>
         <div id='mostrar_alunos'>
            <ul>
               <li><a href="mostrar.php">Mostrar Alunos</a></li>
            </ul>
         </div>
         <!--<p><a href="mostrar.php">Mostrar Alunos</a>-->
      </div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
 </body>
</html>