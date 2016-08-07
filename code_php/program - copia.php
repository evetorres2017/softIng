<?php
	class program {
		public $una_variable;
		public $otra_variable;
		function __construct ($var1, $var2){
			$this->una_variable = $var1;
			$this->otra_variable = $var2;			
		}		
		// Colocamos en variables los datos que nos han enviado		
		/*$varResp1=strtoupper($_POST["txtImg1"]); $varResp2=strtoupper($_POST["txtImg2"]); 
		$varResp3=strtoupper($_POST["txtImg3"]); $varResp4=strtoupper($_POST["txtImg4"]); 
		$varResp5=strtoupper($_POST["txtImg5"]); $varResp6=strtoupper($_POST["txtImg6"]);
		$varResp7=strtoupper($_POST["txtImg7"]); $varResp8=strtoupper($_POST["txtImg8"]); 
		$varResp9=strtoupper($_POST["txtImg9"]); $varResp10=strtoupper($_POST["txtImg10"]);		
		*/
	}
	$clase = new program ('Everth','Torres');
	echo "My name is: ".$clase->una_variable." ".$clase->otra_variable;
?>