<?php
	include_once("include/php/JSON.php");
	include_once('conexionConf.php');
	include "clases/class.comentario.php";
		
	$obj = new comentario();
	$operacion = $_POST['accion'];
	
	switch($operacion) {
		case 'registrarComentario':
			$datos_form['NOMBRE'] = $_POST['nombre'];
			$datos_form['EMAIL'] = $_POST['email'];
			$datos_form['COMENTARIO'] = $_POST['comentario'];
			$datos_form['FECHA'] = date('Y-m-d');
			$datos_form['HORA'] = date('H:i:s');
			$dato = $obj->agregar($datos_form);
		break;
		
		default:
		break;
	}
	$json = new Services_JSON();
	$resp = $json->encode($dato);
	echo $resp;
?>
