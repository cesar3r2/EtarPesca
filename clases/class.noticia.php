<?php
class noticia {
	var $_perfil1;
	
	function noticia() {
		include("configDb.php");
	}
	
	public function lista() {
		$consulta = "SELECT * FROM noticias ORDER BY fecha DESC";
		$resultado = $this->_perfil1->Execute($consulta);
 		$datos = $resultado->GetArray();
		$this->_perfil1->Close();
		return $datos;
	}
}
?>