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
	
	$codigo = $_POST["codigo"];
	$aceite = $_POST["aceite"];
	$escopo = $_POST["escopo"];
	$banner = $_POST["banner"];
	$lista = $_POST["lista"];
	$material = $_POST["material"];

if ($codigo == "") {
echo "Digite o n&uacute;mero de inscri&ccedil;&atilde;o.";
echo '<BR>';
           echo '<h1>';
           echo '<a href="login_success.php">Voltar</a>';
	   echo '</h1>';
} else {
	
//conexão com mysql
	$conecta = mysql_connect("localhost", "root", "");
	
	ini_set('default_charset','UTF-8');
	
	mysql_set_charset('utf8');

	$baseok = mysql_select_db("coordext", $conecta);
	
	mysql_query($comando, $conecta);

	$comando = "UPDATE inscsemeng SET Iaceite = '$aceite', Iescopo = '$escopo', Ibanner = '$banner', Imaterial = '$lista', Ilista = '$material' WHERE Icodigo = '$codigo'";
	
	$result = mysql_query($comando, $conecta);
  
  // Verifica se o comando foi executado com sucesso
  if(!$result)
    die("Falha ao executar o comando: " . mysql_error());
  else{
    	echo 'Altera&ccedil;&otilde;es feitas com sucesso!';
	 echo "<BR>";
           echo "<h1>";
           echo "<a href=\"login_success.php\">Voltar</a>";
	   echo "</h1>";
	
}}
?>
        </div>


</div>
<!-- end content -->
	
<!-- end page -->
<!-- start footer -->
<div id="footer">
	</div>
<!-- end footer -->
</body>
</html>
