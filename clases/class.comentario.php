<?php
class comentario {
	var $_perfil1;
	
	function comentario() {
		include("configDb.php");
	}
	
	public function agregar($datos) {
		$consulta = "INSERT INTO comentario (nombre, email, comentario, fecha, hora) VALUES ('".$datos['NOMBRE']."', '".$datos['EMAIL']."', '".$datos['COMENTARIO']."', '".$datos['FECHA']."', '".$datos['HORA']."')";
		$resultado = $this->_perfil1->Execute($consulta);
		$this->_perfil1->Close();
		return $resultado;
	}
	
	public function lista() {
		$consulta = "SELECT * FROM comentario";
		$resultado = $this->_perfil1->Execute($consulta);
 		$datos = $resultado->GetArray();
		$this->_perfil1->Close();
		return $datos;
	}
	
	public function lista_pag($reg_pag, $pag_act) {
		$consulta = "SELECT nombre, email, comentario, fecha FROM comentario ORDER BY fecha DESC LIMIT ".$pag_act.",".$reg_pag;
		$resultado = $this->_perfil1->Execute($consulta);
		$datos = $resultado->GetArray();
		$this->_perfil1->Close();
		return $datos;
	}
}
?>