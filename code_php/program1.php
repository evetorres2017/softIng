<?php
	function code() {
		// Colocamos en variables los datos que nos han enviado		
		$resp1=strtoupper($_POST["txtImg1"]); $resp2=strtoupper($_POST["txtImg2"]); 
		$resp3=strtoupper($_POST["txtImg3"]); $resp4=strtoupper($_POST["txtImg4"]); 
		$resp5=strtoupper($_POST["txtImg5"]); $resp6=strtoupper($_POST["txtImg6"]);
		$resp7=strtoupper($_POST["txtImg7"]); $resp8=strtoupper($_POST["txtImg8"]); 
		$resp9=strtoupper($_POST["txtImg9"]); $resp10=strtoupper($_POST["txtImg10"]);		
		$aciertos = 0;
		if("ONE"==$resp1) // Comparamos la variable varResp1 con las posibles respuestas
			$aciertos=$aciertos+1; // En caso de ser verdadera la condicion incrementamos el contador en uno
		if("TWO"==$resp2)
			$aciertos=$aciertos+1;
		if("THREE"==$resp3)
			$aciertos=$aciertos+1;
		if("FOUR"==$resp4)
			$aciertos=$aciertos+1;
		if("FIVE"==$resp5)
			$aciertos=$aciertos+1;
		if("SIX"==$resp6)
			$aciertos=$aciertos+1;
		if("SEVEN"==$resp7)
			$aciertos=$aciertos+1;
		if("EIGHT"==$resp8)
			$aciertos=$aciertos+1;
		if("NINE"==$resp9)
			$aciertos=$aciertos+1;
		if("TEN"==$resp10)
			$aciertos=$aciertos+1;	
		// Mostramos el numero de aciertos obtenidos
		echo "<script language='JavaScript' type='text/javascript'>";
		echo "alert('Number of hits: ".$aciertos."');";
		echo "</script>";
	 }
?>