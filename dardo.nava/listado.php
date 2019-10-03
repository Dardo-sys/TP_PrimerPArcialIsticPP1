<?php

	$miPatenteParaCobrar="aaa666"//$_GET['patente'];

	$miArchivo = fopen("estcionados.txt", 'r');
	while (!feof($miArchivo)) 
	{
	

		$objeto =json_decode(fgets($miArchivo));
		if($objeto->patente==$miPatenteParaCobrar)
		{
			$ahora=mktime();
			$tiempoTranscurrido= $ahora-$objeto->fechaIngreso;
			//var_dump($tiempoTranscurrido);
			//die();
			$importe=($tiempoTranscurrido/60)*100;
			$objeto->imprte=$importe;
			$objeto->fechaISalida=$ahora;
			//guardar en el archivo



			break;
			//continue;
		}
		
		//die();
			
	}
fclose($miArchivo);
?>