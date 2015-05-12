function abrirAjax()
{
	var xmlhttp=false;
	try
	{
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch(e)
	{
		try
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(E)
		{
			if (!xmlhttp && typeof XMLHttpRequest!='undefined') xmlhttp=new XMLHttpRequest();
		}
	}
	return xmlhttp;
}

function cambiar_contenido(valor, tabla)
{
	var contenido = document.getElementById(tabla);
	var contenido_modulos = abrirAjax();
	
	contenido_modulos.open("GET", valor, true);
    contenido_modulos.onreadystatechange=function()
	{
		if (contenido_modulos.readyState==1)
		{
			contenido.innerHTML="";
			contenido.innerHTML="<DIV align=\"center\"><IMG src=\"imagenes/cargando.gif\" align=\"center\" border=\"0\"><BR>Cargando</DIV>";
		}
		if (contenido_modulos.readyState==4)
		{
			contenido.innerHTML="";
			contenido.innerHTML=contenido_modulos.responseText;
		}
	}
	contenido_modulos.send(null);
}

function buscarInfoEnter(e, operacion)
{
	var code;
	if (!e) var e = window.event;
	if (e.keyCode) code = e.keyCode;// EN CASO QUE EL NAVEGADOR SEA IE
	else if (e.which) code = e.which; //EN CASO QUE EL NAVEGADOR SEA MOZILLA FIREFOX
	if (code == 13) {
		if(operacion=='buscarUsuario')
		{
			validar_usuario();
		}
	}	
}

function validar_usuario() {
	var usuario = document.getElementById('usuario');
	var clave = document.getElementById('clave');
	var mensaje = document.getElementById('mensaje');
	
	if (usuario.value == '') {
		mensaje.innerHTML = 'Debe introducir un usuario';
		mensaje.style.visibility = 'visible';
		usuario.focus();
		return;
	} else if (clave.value == '') {
		mensaje.innerHTML = 'Debe introducir una contraseña';
		mensaje.style.visibility = 'visible';
		clave.focus();
		return;
	} else {
		var contenido_codigo = abrirAjax();
		contenido_codigo.open("GET", "procesos.php?accion=1&usuario="+usuario.value+"&clave="+clave.value, true);
		contenido_codigo.onreadystatechange=function()
		{
			if (contenido_codigo.readyState==4)
			{
				var arregloDatos;
				arregloDatos = contenido_codigo.responseText;
				if (arregloDatos == 0) {
					mensaje.innerHTML = 'Autenticación Incorrecta';
					mensaje.style.visibility = 'visible';
					clave.value = '';
					usuario.focus();
					return;
				} else if (arregloDatos == 1) {
					cambiar_contenido('admin.php', 'main');
					usuario.value = '';
					clave.value = '';
					mensaje.innerHTML = '';
				}
			}
		}
		contenido_codigo.send(null);
	}
}

function registrar_comentario()
{
	var nombre = document.getElementById('txt_nombre').value;
	var email = document.getElementById('txt_email').value;
	var comentario = document.getElementById('txt_comentario').value;
	
	if(nombre!="" && email!="" && comentario!="")
	{
		AjaxRequest.post
									(
										{'parameters':{ 	'nombre':nombre,
															'email':email,
															'comentario':comentario,
															'accion':'registrarComentario'
															}
															,'onSuccess':function(req){verificarTransaccion(req)}
															,'url':'transaccion.php'
															,'onError': function(req)
															{
																alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
															}
											}
										);
	} else {
		alert('Ha dejado campos vacíos o sin seleccionar. Por favor verifique los datos');
	}
}

function verificarTransaccion(req)
{
	var resp = eval ("("+ req.responseText +")");
	if(resp != false) {
		alert("Su comentario ha sido registrado con éxito");
		cambiar_contenido('inicio.php', 'main');
	} else {
		alert('Error! Por favor verifique los datos suministrados');
	}
}

function validarEmail(valor,id) {
	if ((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor)) || (valor=='')) {
		return (true)
	} else {
		alert("La dirección de email es incorrecta. Revise sus datos");
		document.getElementById(id).value = '';
		document.getElementById(id).focus();
	}
}