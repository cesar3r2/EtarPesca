<?php
	// NO PERMITE QUE SE VISUALICEN LOS ERRORES POR DEFECTOS DEL PHP
	$servidor                   = $_SERVER['SERVER_NAME'];
	// VARIABLES PARA LA BASE DE DATOS
	$config_db_user             = "root";          // Usuario
	$config_db_password         = "12345";           // Clave
	$config_db_port             = "5432";          // Puerto -> aun no se aplica
	$config_db                  = "etar";    // Servicio de Base de Datos
	$config_db_ip               = "localhost";     // Servidor de Base de Datos
	$config_db_debug            = false;
	$config_db_driver           = 'mysql';
	$config_titulo_paginas      = 'ETAR';
	// VARIABLES DEL SISTEMA
	$config_host                = $servidor;
	$config_absolute_path       = 'C:/AppServ/www/etarpesca/EtarPesca';
	$config_sitio               = 'http://'.$servidor.'/seguridad/';
	$config_raiz_general        = 'http://'.$servidor.'/';
?>