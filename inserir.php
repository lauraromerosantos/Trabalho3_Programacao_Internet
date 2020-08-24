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
      <div id="inserir">
         <h2>CADASTRO DE ALUNOS:</h2>
         <center>
            <form action="inserido.php" method="get">
            <table border='2' align='center' width='400' bgcolor="darkgray">
            <tr><td align='center'>
            <label>Nome:</label>
            <input type="text" name="nome">
            <!--Nome :<input type="text" name="nome">-->
            <label>Endereço:</label>
            <input type="text" name="endereco" >
            <!--<br>Endereço: <input type="text" name="endereco" >-->
            <label>Cidade:</label>
            <select name="cidade">
            <!--<br>Cidade: <select name="cidade">-->
            <?php
            require_once("conecta.inc.php");
            $ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
            $resultado=mysqli_query($ok, "Select * from cidade order by nomecid") or die ("Não é possível consultar cidades.");
            while ($linha=mysqli_fetch_array($resultado))
            {
               $cod_cidade=$linha["cod_cidade"];
               $nomecid=$linha["nomecid"];
               print("<option value='$nomecid'>$nomecid</option>");
            }
            ?>
            </select>
            <label>Curso:</label>
            <select name="curso">
            <!--<br>Curso: <select name="curso">-->
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
            <br><br><input type="submit" id="botao" value="INSERIR ALUNO">
            </td></tr>
            </table>
            </form>
            <p><a href="mostrar.php">Voltar</a>
         </center>
      </div>
   </section>
 <footer>
   <p>TRABALHO DE PROGRAMAÇÃO PARA INTERNET 1 / 2020</p>
 </footer>
 </body>
</html>
