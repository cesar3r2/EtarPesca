<?php
	session_start();
	ob_start();
	
	include "conexionConf.php";
	include "clases/class.comentario.php";
	include "include/php/interfaz.php";
	
	if ($_SESSION["ESTATUS_USUARIO"] != "AUTENTICADO") {
		echo '<h2>Administraci&oacute;n</h2>';
		echo '<table width="520" cellpadding="0" cellspacing="0" border="0">
				<tr>
			    	<td height="400" style="vertical-align:top">
						<strong>Este m&oacute;dulo s&oacute;lo se encuentra disponible para el administrador del sitio</strong>
					</td>
			    </tr>
			</table>';
		exit();
	}
	
	$objeto1 = new comentario();
	$fObj1 = $objeto1->lista();
	$totObj1 = count($fObj1);
	
	$url = "admin.php";
	$limite = 15;
	$pag = $_GET['pag'];
	$buscar = $_GET['buscar'];
	
	if($pag)
		$inicio = ($pag-1) * $limite;
	else
		$inicio = 0;
	
	if ($buscar != '') {
		$objeto2 = new comentario();
		$fObj2 = $objeto2->busquedaComentarios($buscar);
		$totObj2 = count($fObj2);
	} else {
		$objeto2 = new comentario();
		$fObj2 = $objeto2->lista_pag($limite, $inicio);
		$totObj2 = count($fObj2);
	}
?>
<h2>Administraci&oacute;n &raquo; Comentarios</h2>
<table width="520" cellpadding="0" cellspacing="0" border="0">
	<tr>
    	<td align="left"><strong>Administrador:</strong> <?php echo $_SESSION["NOMBRE_USUARIO"]; ?> <a href="logout.php" name="TemplateInfo">[Cerrar Sesi&oacute;n]</a></td>
    </tr>
</table>
<TABLE width="510" border="0" cellpadding="4" cellspacing="4">
	<THEAD>
	<TR>
	    <TH>Fecha</TH>
		<TH>Nombre</TH>
		<TH>Email</TH>
		<TH>Comentario</TH>
	</TR>
	</THEAD>
	<?php if (($totObj1 == 0) || ($totObj2 == 0)){?>
	<TR bgcolor="#F3F3F3">
		<TD colspan='4' align="center">No existen registros encontrados</TD>
	</TR>
	<?php } else {
				for($i=0; $i<$totObj2; $i++) {
	?>
	<TBODY>
	<TR bgcolor="#FFFFFF">
		<TD><?php echo fecha($fObj2[$i]['fecha']); ?></TD>
		<TD><?php echo $fObj2[$i]['nombre']; ?></TD>
		<TD><?php echo $fObj2[$i]['email']; ?></TD>
        <TD><?php echo $fObj2[$i]['comentario']; ?></TD>
	</TR>
	<?php }
	} ?>
	</TBODY>
	<TR>
		<TD align="center" colspan="4"><?php if ($buscar == '') echo paginacion($url, $pag, $totObj1); ?></TD>
	</TR>
</TABLE>