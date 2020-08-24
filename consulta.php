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
      <div id="consulta">
         <h2>Consulta:</h2>
         <center>
         <table >
         <tr><td align='center'>
         <form action="pesq.php" method="get">
         Nome: <input type="text" name="nome">
         <input type="hidden" name="id" value="1">
         &nbsp;&nbsp;<input type="submit" value="Pesquisar Nome">
         </form>

         <form action="pesq.php" method="get">
         Endereço: <input type="text" name="endereco">
         <input type="hidden" name="id" value="2">
         &nbsp;&nbsp;<input type="submit" value="Pesquisar Enderço">
         </form>

         <form action="pesq.php" method="get">
         Cidade: <select type="text" name="cidade">
         <option value=""></option>    
         <?php
            require("conectac.inc.php");
            $ok = conectac_bd() or die ("Não é possível conectar-se ao servidor.");
            $resultado=mysqli_query($ok, "Select * from cidade order by nomecid") or die ("Não é possível consultar cidades.");
            while ($linha=mysqli_fetch_array($resultado))
            {
               $cod_cidade=$linha["cod_cidade"];
               $nomecid=$linha["nomecid"];
               print("<option value='$nomecid'>$nomecid</option>");
            }
            ?>
         </select>
         <input type="hidden" name="id" value="3">
         &nbsp;&nbsp;<input type="submit" value="Pesquisar Cidade">
         </form>

         <form action="pesq.php" method="get">
         Curso: <select name="curso">
         <option value=""></option>
         <?php
         require("conecta.inc.php");
         $ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
         $resultado=mysqli_query($ok, "Select * from curso order by nomecur") or die ("Não é possível consultar cursos.");
         while ($linha=mysqli_fetch_array($resultado))
         {
            $cod_curso=$linha["cod_curso"];
            $nomecur=$linha["nomecur"];
            print("<option value='$cod_curso'>$nomecur</option>");
         }
         ?>
         </select>
         <input type="hidden" name="id" value="4">
         &nbsp;&nbsp;<input type="submit" value="Pesquisar Curso">
         </form>
         </td></tr>
         </table>
         </center>
         <p><a href="mostrar.php">Mostrar Alunos</a>
      </div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
 </body>
</html>

