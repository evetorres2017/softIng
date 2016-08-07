<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title>Fruits</title>
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
<li><a href="clothing.php">Clothing</a></li>
<li class="active"><a href="#">Fruits</a></li>
</ul>
</div>
<div id="derecha"class="span7">
<h2>Fruits</h2>
<p>Select correctly the fruits shown below.</p>
<form name="form1" method="post" action="">
<table width="100%">
	<tr>
		<td>
		<img src="images/fruta1.jpg" width="200" height="200">
		<center>
		  <select name="select1">
		    <option value="APPLE" selected>Apple</option>
		    <option value="ORANGE">Orange</option>
		    <option value="TOMATO">Tomato</option>
		    <option value="WATERMELON">Watermelon</option>
		    </select>
		  </center>
		</td>
		<td>		
		<img src="images/fruta2.jpg" width="200" height="200">
		<center><select name="select6">
		    <option value="APPLE">Apple</option>
		    <option value="PEAR" selected>Pear</option>
		    <option value="STRAWBERRY">Strawberry</option>
		    <option value="BANANA">Banana</option>
		    </select></center>
		</td>
	</tr>
	<tr>
		<td>		
		<img src="images/fruta3.jpg" width="200" height="200">
		<center>
		  <select name="select2">
		    <option value="HANDLE">Handle</option>
		    <option value="WATERMELON">Watermelon</option>
		    <option value="GRAPE" selected>Grape</option>
		    <option value="LEMON">Lemon</option>
		    </select>
		</center>
		</td>
		<td>
		<img src="images/fruta4.jpg" width="200" height="200">
		<center><select name="select7">
		    <option value="ORANGE">Orange</option>
		    <option value="LEMON" selected>Lemon</option>
		    <option value="ORANGE">Orange</option>
		    <option value="WATERMELON">Watermelon</option>
		    </select></center>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/fruta5.jpg" width="200" height="200">
		<center>
		  <select name="select3">
		    <option value="APPLE">Apple</option>
		    <option value="LEMON">Lemon</option>
		    <option value="ORANGE" selected>Orange</option>
		    <option value="STRAWBERRY">Strawberry</option>
		    </select>
		</center>
		</td>
		<td>
		<img src="images/fruta11.jpg" width="200" height="200">
		<center><select name="select8">
		    <option value="MELON">Melon</option>
		    <option value="WATERMELON" selected>Watermelon</option>
		    <option value="GRAPE">Grape</option>
		    <option value="APPLE">Apple</option>
		    </select></center>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/fruta7.jpg" width="200" height="200">
		<center>
		  <select name="select4">
		    <option value="MELON">Melon</option>
		    <option value="WATERMELON" selected>Watermelon</option>
		    <option value="GRAPE">Grape</option>
		    <option value="TOMATO">Tomato</option>
		    </select>
		</center>
		</td>
		<td>
		<img src="images/fruta8.jpg" width="150" height="150">
		<center><select name="select9">
		    <option value="PINEAPPLE" selected="selected">Pineapple</option>
		    <option value="BANANA">Banana</option>
		    <option value="PEAR">Pear</option>
		    <option value="APPLE">Apple</option>
		    </select></center>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/fruta9.jpg" width="200" height="200">
		<center>
		  <select name="select5">
		    <option value="PINEAPPLE">Pineapple</option>
		    <option value="PEAR">Pear</option>
		    <option value="APPLE">Apple</option>
		    <option value="BANANA" selected>Banana</option>
		    </select>
		</center>
		</td>
		<td>
		<img src="images/fruta10.jpg" width="200" height="200">
		<center><select name="select10">
		    <option value="APPLE" selected>Apple</option>
		    <option value="ORANGE">Orange</option>
		    <option value="PINEAPPLE">Pineapple</option>
		    <option value="WATERMELON">Watermelon</option>
		    </select></center>
		</td>
	</tr>
</table>
<br><center><input type="submit" name="btnEnviar" value="Accept" class="btn btn-info"></center>
</form>
<?php
	 if(isset($_POST['btnEnviar'])){
		require_once("code_php/program4.php");
		code();
		echo "<a href='#' class='btn btn-inverse'>Continue</a>";
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