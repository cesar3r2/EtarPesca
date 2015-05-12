<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="include/estilos/estilos.css" type="text/css" />
<title>ETAR de Pesca</title>
<script type="text/javascript" src="include/js/funciones.js"></script>
<script type="text/javascript" src="include/js/AjaxRequest.js"></script>
</head>
<body>
<!-- wrap starts here -->
<div id="wrap">
	<!--header -->
	<div id="header">
		<h1 id="logo-text"><a><img src="imagenes/banner.png"></a></h1>
		<div id="header-links">
			<p>
			<a href="index.php">Inicio</a> |
			<a style="cursor:pointer;" onClick="cambiar_contenido('contacto.php', 'main');">Contacto</a>
			</p>		
		</div>		
	</div>
	<!-- navigation -->	
	<?php include "menu.php"; ?>			
	<!-- content-wrap starts here -->
	<div id="content-wrap">
    	<div id="main">
			<?php include "inicio.php"; ?>
        </div>
		<div id="sidebar">
			<h2>Noticias</h2>
			<?php include "noticias.php"; ?>
			<h2>Links de interes</h2>
			<?php include "links.php"; ?>
            <h2>Login Administrador</h2>
			<?php include "login.php"; ?>
		</div>
	<!-- content-wrap ends here -->	
	</div>
	<!--footer starts here-->
	<div id="footer">
		<p>&copy; 2012 <strong>ETAR de Pesca</strong> | Escuela Técnica Agropercuaria Robinsoniana de Pesca</p>
	</div>	
<!-- wrap ends here -->
</div>
</body>
</html>