<?php
class usuario {
	private $nombre;
	private $clave;
	private $tipo;
	
	var $_perfil1;
	
	function usuario() {
		include("configDb.php");
	}
	
	public function buscar_usuario($usuario) {
		$usuario = strtolower($usuario);
		$consulta = "SELECT * FROM usuario WHERE usuario='".$usuario."'";
		$resultado = $this->_perfil1->Execute($consulta);
 		$datos = $resultado->GetArray();
		$this->_perfil1->Close();
		return $datos;
	}
	
	public function cambiar_clave($usuario, $clave) {
		$consulta = "UPDATE usuario SET clave='".base64_encode($clave)."' WHERE usuario='".$usuario."'";
		$resultado = $this->_perfil1->Execute($consulta);
		$this->_perfil1->Close();
		return $resultado;
	}
	
	public function &validar_usuario($nombre, $clave) {
		$usuario = strtolower($nombre);
		$consulta = "SELECT * FROM usuario WHERE usuario='".$usuario."' AND clave='".$clave."'";
		$resultado = $this->_perfil1->Execute($consulta);
 		$datos = $resultado->GetArray();
		$this->_perfil1->Close();
		return $datos;
	}
}
?>