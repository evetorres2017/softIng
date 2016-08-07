<?php
	function code() {
		// Colocamos en variables los datos que nos han enviado		
		$resp1=strtoupper($_POST["select1"]); $resp2=strtoupper($_POST["select2"]); 
		$resp3=strtoupper($_POST["select3"]); $resp4=strtoupper($_POST["select4"]); 
		$resp5=strtoupper($_POST["select5"]); $resp6=strtoupper($_POST["select6"]);
		$resp7=strtoupper($_POST["select7"]); $resp8=strtoupper($_POST["select8"]); 
		$resp9=strtoupper($_POST["select9"]); $resp10=strtoupper($_POST["select10"]);		
		$aciertos=0;
		if("ORANGE"==$resp1) // Comparamos la variable varResp1 con las posibles respuestas
			$aciertos=$aciertos+1; // En caso de ser verdadera la condicion incrementamos el contador en uno
		if("HANDLE"==$resp2)
			$aciertos=$aciertos+1;
		if("LEMON"==$resp3)
			$aciertos=$aciertos+1;
		if("MELON"==$resp4)
			$aciertos=$aciertos+1;
		if("PEAR"==$resp5)
			$aciertos=$aciertos+1;
		if("STRAWBERRY"==$resp6)
			$aciertos=$aciertos+1;
		if("WATERMELON"==$resp7)
			$aciertos=$aciertos+1;
		if("APPLE"==$resp8)
			$aciertos=$aciertos+1;
		if("BANANA"==$resp9)
			$aciertos=$aciertos+1;
		if("PINEAPPLE"==$resp10)
			$aciertos=$aciertos+1;
		//echo $resp2;
		// Mostramos el numero de aciertos obtenidos
		echo "<script language='JavaScript' type='text/javascript'>";
		echo "alert('Number of hits: ".$aciertos."');";
		echo "</script>";
	 }
?>