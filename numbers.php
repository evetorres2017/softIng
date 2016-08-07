<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title>Numbers</title>
		<link rel="stylesheet" href="../bitacora/css/bootstrap.css" media="all">
		<link rel="stylesheet" href="../bitacora/css/bootstrap-responsive.css" media="all">
		<link rel="stylesheet" href="css/estiloGeneral.css" media="all">
		<script type="text/javascript" src="../bitacora/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src=".../bitacora/js/bootstrap.js"></script>
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
<li class="active"> <a href="#">Numbers</a></li>
<li> <a href="colors.php">Colors</a></li>
<li><a href="clothing.php">Clothing</a></li>
<li><a href="fruits.php">Fruits</a></li>
</ul>
</div>
<div id="derecha"class="span7">
<h2>Numbers</h2>
<p>Write correctly the following numbers.</p>
<form name="form1" method="post" action="">
<table width="100%">
	<tr>
		<td>
		<img src="images/1.png" width="150" height="150"><br>
		<center><input name="txtImg1" type="text" size="10" maxlength="10" required/></center>
		</td>
		<td>
		<img src="images/2.jpg" width="150" height="150"><br>
		<center><input type="text" name="txtImg2" size="10" maxlength="10" required/></center>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/3.jpg" width="150" height="150"><br>
		<center><input name="txtImg3" type="text" size="10" maxlength="10" required/></center>
		</td>
		<td>
		<img src="images/4.jpg" width="150" height="150"><br>
		<center><input type="text" name="txtImg4" size="10" maxlength="10" required/></center>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/5.jpg" width="120" height="120"><br>
		<center><input name="txtImg5" type="text" size="10" maxlength="10" required/></center>
		</td>
		<td>
		<img src="images/6.jpg" width="150" height="150"><br>
		<center><input type="text" name="txtImg6" size="10" maxlength="10" required/></center>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/7.jpg" width="100" height="100"><br>
		<center><input name="txtImg7" type="text" size="10" maxlength="10" required/></center>
		</td>
		<td>
		<img src="images/8.jpg" width="150" height="150"><br>
		<center><input type="text" name="txtImg8" size="10" maxlength="10" required/></center>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/9.png" width="150" height="150"><br>
		<center><input name="txtImg9" type="text" size="10" maxlength="10" required/></center>
		</td>
		<td>
		<img src="images/10.jpg" width="150" height="150"><br>
		<center><input type="text" name="txtImg10" size="10" maxlength="10" required/></center>
		</td>
	</tr>
</table>
<br><center><input type="submit" name="btnEnviar" value="Accept" class="btn btn-info"></center>
</form>
<?php
	 if(isset($_POST['btnEnviar'])){
		require_once("code_php/program1.php");
		code();
		echo "<a href='numbers2.php' class='btn btn-inverse'>Continue</a>";
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