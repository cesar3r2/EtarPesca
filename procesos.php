<?php
	session_start();
	ob_start();
	
	include "conexionConf.php";
	include "clases/class.usuario.php";
	
	$accion = $_GET['accion'];
	
	switch ($accion)
	{
		case '1';
			$objUsr = new usuario();
			$usuario = $_GET['usuario'];
			$clave = $_GET['clave'];
			$fUsr = $objUsr->validar_usuario($usuario, $clave);
			$registros = count($fUsr);
			if ($registros == 1)
			{
				$objUsr1 = new usuario();
				$fUsr1 = $objUsr1->buscar_usuario($_GET['usuario']);
				$_SESSION["ESTATUS_USUARIO"] = "AUTENTICADO";
				$_SESSION["NOMBRE_USUARIO"] = $fUsr1[0]["nombre"];
				$_SESSION["USUARIO"] = $_GET['usuario'];
			}	
			echo $registros;
		break;
		default:
		break;
	}
?>