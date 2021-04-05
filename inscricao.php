<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!---->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Inscri&ccedil;&atilde;o de projetos Semana de Engenharia</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- start header -->
<div class="cabecalho" id="cab">
  <div align="center"><img src="images/Semana de engenharia.jpg" width="441" height="152" alt="Semana de Engenharia" /></div><!-- star menu -->
<div id="menu">
	<ul>
	</ul>
</div>
<!-- end menu -->
<!-- start page -->
<div id="page">
<!-- start content -->
	<div id="content1">

<?php
	
	$titulo = $_POST["Ititulo"];
	$nome1 = $_POST["Inome1"];
	$sobre1 = $_POST["Isobre1"];
	$curso1 = $_POST["Icurso1"];
	$periodo1 = $_POST["Iperiodo1"];
	$ano1 = $_POST["Iano1"];
	$email1 = $_POST["Iemail1"];
	$nome2 = $_POST["Inome2"];
	$sobre2 = $_POST["Isobre2"];
	$curso2 = $_POST["Icurso2"];
	$periodo2 = $_POST["Iperiodo2"];
	$ano2 = $_POST["Iano2"];
	$email2 = $_POST["Iemail2"];
	$nome3 = $_POST["Inome3"];
	$sobre3 = $_POST["Isobre3"];
	$curso3 = $_POST["Icurso3"];
	$periodo3 = $_POST["Iperiodo3"];
	$ano3 = $_POST["Iano3"];
	$email3 = $_POST["Iemail3"];
	$nome4 = $_POST["Inome4"];
	$sobre4 = $_POST["Isobre4"];
	$curso4 = $_POST["Icurso4"];
	$periodo4 = $_POST["Iperiodo4"];
	$ano4 = $_POST["Iano4"];
	$email4 = $_POST["Iemail4"];
	$nome5 = $_POST["Inome5"];
	$sobre5 = $_POST["Isobre5"];
	$curso5 = $_POST["Icurso5"];
	$periodo5 = $_POST["Iperiodo5"];
	$ano5 = $_POST["Iano5"];
	$email5 = $_POST["Iemail5"];
	$resumo = $_POST["Iresumo"];
	$orientador = $_POST["Iorientador"];
	$date = date("d/m/Y h:i");
	
if ($titulo == "" OR $nome1 == "" OR $sobre1 == "" OR $curso1 == "" OR $periodo1 == "" OR $ano1 == "" OR $email1 == "" OR $nome2 == "" OR $sobre2 == "" OR $curso2 == "" OR $periodo2 == "" OR $ano2 == "" OR $email2 == "" OR $nome3 == "" OR $sobre3 == "" OR $curso3 == "" OR $periodo3 == "" OR $ano3 == "" OR $email3 == "" OR $nome4 == "" OR $sobre4 == "" OR $curso4 == "" OR $periodo4 == "" OR $ano4 == "" OR $email4 == "" OR $nome5 == "" OR $sobre5 == "" OR $curso5 == "" OR $periodo5 == "" OR $ano5 == "" OR $email5 == "" OR $resumo == "" OR $orientador == "") {
           echo "Preencha todos os campos. Se sua equipe tem menos de cinco pessoas, preencha o campo com xxx.";
           echo "<BR>";
           echo "<h1>";
           echo "<a href=\"form.html\">Voltar<a/>";
	   echo "</h1>";
        } else {
//conexão com mysql
	$conecta = mysql_connect("localhost", "root", "");
	
	ini_set('default_charset','UTF-8');
	
	mysql_set_charset('utf8');

	$baseok = mysql_select_db("coordext", $conecta);
	
	mysql_query($comando, $conecta);

	$comando = "INSERT INTO inscsemeng(Icodigo, Ititulo, Inome1, Isobre1, Icurso1, Iperiodo1, Iano1, Iemail1, Inome2, Isobre2, Icurso2, Iperiodo2, Iano2, Iemail2, Inome3, Isobre3, Icurso3, Iperiodo3, Iano3, Iemail3, Inome4, Isobre4, Icurso4, Iperiodo4, Iano4, Iemail4, Inome5, Isobre5, Icurso5, Iperiodo5, Iano5, Iemail5, Iresumo, Iorientador)
 VALUES(null, '$titulo', '$nome1', '$sobre1', '$curso1', '$periodo1', '$ano1', '$email1', '$nome2', '$sobre2', '$curso2', '$periodo2', '$ano2', '$email2', '$nome3', '$sobre3', '$curso3', '$periodo3', '$ano3', '$email3', '$nome4', '$sobre4', '$curso4', '$periodo4', '$ano4', '$email4', '$nome5', '$sobre5', '$curso5', '$periodo5', '$ano5', '$email5', '$resumo', '$orientador')";
	
	 $result = mysql_query($comando, $conecta);
  
  // Verifica se o comando foi executado com sucesso
  if(!$result)
    die("Falha ao executar o comando: " . mysql_error());
  else
    	echo "Inscri&ccedil;&atilde;o feita com sucesso! Clique ";
	echo "<a href=\"termo.pdf\" target=_blank>aqui</a>";
	echo " para imprimir<strong> o termo de aceite do orientador. </strong>";
	echo "<BR>";
	echo "<h1>Comprovante de Inscri&ccedil;&atilde;o de Projeto</h1>";
	echo "<BR>";
	echo "T&iacute;tulo: $titulo";
	echo "<BR>";
	echo "Equipe:  $nome1 $sobre1, $curso1, $periodo1, $ano1, $email1, ";
	echo "<BR>";
	echo "	$nome2 $sobre2, $curso2, $periodo2, $ano2, $email2, ";
	echo "<BR>";
	echo "	$nome3 $sobre3, $curso3, $periodo3, $ano3, $email3, ";
	echo "<BR>";
	echo "	$nome4 $sobre4, $curso4, $periodo4, $ano4, $email4, ";
	echo "<BR>";
	echo "	$nome5 $sobre5, $curso5, $periodo5, $ano5, $email5";
	echo "<BR>";
	echo "Resumo: $resumo";
	echo "<BR>";
	echo "Orientador: $orientador";
echo "<BR>";
echo "$date";


}
?>
<BR>
<input type="button" name="Imprimir página" value="Imprimir" onclick="window.print();"> 
</div>
</div>



</body>
</html>

