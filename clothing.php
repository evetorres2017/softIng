<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title>Clothing</title>
		<link rel="stylesheet" href="../bitacora/css/bootstrap.css" media="all">
		<link rel="stylesheet" href=".../bitacora/css/bootstrap-responsive.css" media="all">
		<link rel="stylesheet" href="css/estiloGeneral.css" media="all">
		<link rel="stylesheet" href="css/cssColores.css">
		<script type="text/javascript" src="../bitacora/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="../bitacora/js/bootstrap.js"></script>
		<script>
			$(document).ready(function(){
				$('.dropdown-toggle').dropdown();
			});
		</script>
	</head>
	<body>
		<div class="container" id="general">
<div id="encabezado"class="row">

<h2>Didactic software</h2>

</div>
<div id="cuerpo" class="row">
<div id="izquierda" class="span4">
<ul class="nav nav-list"><br/>
<li>
<a href="index.html">Home</a>
</li>
<li class="nav-header">
Exercises
</li>
<li><a href="numbers.php">Numbers</a></li>
<li><a href="#">Colors</a></li>
<li class="active"><a href="#">Clothing</a></li>
<li><a href="fruits.php">Fruits</a></li>
</ul>
</div>
<div id="derecha"class="span7">
<h2>Clothing</h2>
<p>Select correctly the colors shown below.</p>
<form name="form1" method="post" action="">
<table width="100%">
	<tr>
		<td>
		<img src="images/ima1.jpg" width="200" height="200">
		<center>
		  <select name="select1">
		    <option value="SOCK" selected>Sock</option>
		    <option value="BLOUSE">Blouse</option>
		    <option value="SHORTS">Shorts</option>
		    <option value="SWEATER">Sweater</option>
		    </select>
		  </center>
		</td>
		<td>		
		<img src="images/ima2.jpg" width="200" height="200">
		<center><select name="select6">
		    <option value="SHIRT">Shirt</option>
		    <option value="SHORTS" selected>Shorts</option>
		    <option value="TROUSERS">Trousers</option>
		    <option value="BLOUSE">Blouse</option>
		    </select></center>
		</td>
	</tr>
	<tr>
		<td>		
		<img src="images/ima3.jpg" width="200" height="200">
		<center>
		  <select name="select2">
		    <option value="SHORTS">Shorts</option>
		    <option value="SCARF">Scarf</option>
		    <option value="SKIRT" selected>Skirt</option>
		    <option value="GLOVE">Glove</option>
		    </select>
		</center>
		</td>
		<td>
		<img src="images/ima4.jpg" width="200" height="200">
		<center><select name="select7">
		    <option value="SKIRT">Skirt</option>
		    <option value="GLOVE" selected>Glove</option>
		    <option value="CAP">Cap</option>
		    <option value="SCARF">Scarf</option>
		    </select></center>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/ima5.jpg" width="200" height="200">
		<center>
		  <select name="select3">
		    <option value="SHIRT">Shirt</option>
		    <option value="CAP">Cap</option>
		    <option value="TROUSERS" selected>Trousers</option>
		    <option value="SOCK">Sock</option>
		    </select>
		</center>
		</td>
		<td>
		<img src="images/ima6.jpg" width="200" height="200">
		<center><select name="select8">
		    <option value="SOCK">Sock</option>
		    <option value="SHIRT" selected>Shirt</option>
		    <option value="SKIRT">Skirt</option>
		    <option value="GLOVE">Glove</option>
		    </select></center>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/ima7.jpg" width="200" height="200">
		<center>
		  <select name="select4">
		    <option value="SKIRT">Skirt</option>
		    <option value="SWEATER" selected>Sweater</option>
		    <option value="BLOUSE">Blouse</option>
		    <option value="GLOVE">Glove</option>
		    </select>
		</center>
		</td>
		<td>
		<img src="images/ima8.jpg" width="200" height="200">
		<center><select name="select9">
		    <option value="SCARF" selected="selected">Scarf</option>
		    <option value="BLOUSE">Blouse</option>
		    <option value="SHIRT">Shirt</option>
		    <option value="SKIRT">Skirt</option>
		    </select></center>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/ima9.jpg" width="200" height="200">
		<center>
		  <select name="select5">
		    <option value="CAP">Cap</option>
		    <option value="SHORTS">Shorts</option>
		    <option value="SCARF">Scarf</option>
		    <option value="SOCK" selected>Sock</option>
		    </select>
		</center>
		</td>
		<td>
		<img src="images/ima10.jpg" width="200" height="200">
		<center><select name="select10">
		    <option value="SHIRT" selected>Shirt</option>
		    <option value="GLOVE">Glove</option>
		    <option value="SOCK">Sock</option>
		    <option value="CAP">Cap</option>
		    </select></center>
		</td>
	</tr>
</table>
<br><center><input type="submit" name="btnEnviar" value="Accept" class="btn btn-info"></center>
</form>
<?php
	 if(isset($_POST['btnEnviar'])){
		require_once("code_php/program5.php");
		code();		
	 }
?>	
</div>
</div>
<div id=""class="row">

<div id="footer" class="span12">
Software developed by <a href="https://twitter.com/JackNaiper0688">The Joker</a> for the project intraBACH 
<a href="http://creativecommons.org/licenses/by-nc-nd/2.5/mx/">Creative Commons</a> <b>Powered by Twitter 
Bootstrap</b>
</div>
</div>
</div>
	</body>
</html>