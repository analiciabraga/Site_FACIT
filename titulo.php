
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--


-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Coordena&ccedil;&atilde;o de Extens&atilde;o FACIT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1>Coordena&ccedil;&atilde;o de Extens&atilde;o</h1>
		<p>ENGENHARIA &Eacute; FACIT!</p>
	</div>
	
</div>
<!-- end header -->
<!-- star menu -->
<div id="menu">
	<ul>
		<li><a href = "http://www.facit.edu.br">FACIT</a></li>
	</ul>
</div>
<!-- end menu -->
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
<?php
 	$titulo = $_POST["pesquisa"];


$servidor = "localhost"; /*maquina na qual o banco de dados está*/
$usuario = "root"; /*usuario do banco de dados MySql*/
$senha = ""; /*senha do banco de dados MySql*/
$banco = "coordext"; /*seleciona o banco a ser usado*/



$conexao = mysql_connect($servidor,$usuario,$senha);  /*Conecta no bando de dados MySql*/
//converte os dados para não haver incompatibilidade

	ini_set('default_charset','UTF-8');
	
	mysql_set_charset('utf8');

mysql_select_db($banco); /*seleciona o banco a ser usado*/

$sql = "SELECT Icodigo, Ititulo, Iaceite, Iescopo, Ibanner, Imaterial FROM inscsemeng WHERE Ititulo = '$titulo'";
        
    $resultado = mysql_query($sql,$conexao);
    $linhas = mysql_num_rows($resultado);

$res = mysql_query($sql); /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */

  // Verifica se o comando foi executado com sucesso
  if(!$res)
    die("Falha ao executar o comando: " . mysql_error());
  else{
$escrever=mysql_fetch_array($res);
echo '<table><tr><td>Codigo</td><td>Titulo</td><td>Aceite</td><td>Escopo</td><td>Banner</td><td>Material</td></tr>';
echo '<tr><td>' . $escrever["Icodigo"] . '</td><td>' . $escrever["Ititulo"] . '</td><td>' . $escrever["Iaceite"] . '</td><td>' . $escrever["Iescopo"] . '</td><td>' . $escrever["Ibanner"] . '</td><td>' . $escrever["Imaterial"] . '</td></tr>';
echo '</table>';}
mysql_close($conexao);

  ?>
  	</div></div>
	<!-- end content -->
<!-- start footer -->
<div id="footer">
	</div>
<!-- end footer -->
</body>
</html>
