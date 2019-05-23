<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

spl_autoload_register(function($className){
	$filename = $className.".php";

	if(file_exists($filename)){
		require_once($filename);
	}
});

?>