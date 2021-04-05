<?php
session_start();
if(!session_is_registered(login)){
header("location: index.html");
}
?>
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

<form action="registro.php" method="post" target="_self">
  <p>C&oacute;digo:
    <input name="codigo" type="text" />
  </p>
  <p>Materiais entregues:</p>
  <p>
    <label>Aceite:
    <select name="aceite" id="aceite">
      <option>N&atilde;o</option>
      <option>Sim</option>
    </select>
    Escopo</label>
  <label>:
    <select name="escopo" id="escopo">
      <option>N&atilde;o</option>
      <option>Sim</option>
    </select>
    </label>
    <label>Banner:
    <select name="banner" id="banner">
      <option>N&atilde;o</option>
      <option>Sim</option>
    </select>
    </label><br>
    <label>Lista de materiais necess&aacute;rios :
    <select name="lista" id="lista">
      <option>N&atilde;o</option>
      <option>Sim</option>
    </select>
    </label>
  </p>
  <p>
    <label>Lista de materiais
    <textarea name="material" cols="100" rows="5" id="material"></textarea>
    </label>
  </p>
<input type="submit" name="Submit" value="Enviar" />
</form>


</div>
<!-- end content -->
	
<!-- end page -->
<!-- start footer -->
<div id="footer">
	
<!-- end footer -->
</body>
</html>
