<?php
	echo "<br>";
	echo "<br>";

	//echo "<pre>";
	//print_r($_POST);
	//echo "</pre>";
	debugPHP($_POST);
		
		
	//echo "<pre>";
	//print_r($_SESSION);
	//echo "</pre>";
	debugPHP($_SESSION);
	//die();

	
	//ChromePhp::log('Hello console!');
	//ChromePhp::log($_SESSION);
	//ChromePhp::warn('something went wrong!');
//	debugChrome($_SESSION);
	
	
		foreach ($_SESSION as $indice => $valor){
			if($indice==="gustos"){
				echo "<br>GUSTOS:<br>";
				$gustos = $_SESSION["gustos"];
				foreach ($gustos as $indice => $valor) 
					echo "$indice: $valor<br>";
			}else{
				echo "$indice: $valor<br>";
			}
		}
		