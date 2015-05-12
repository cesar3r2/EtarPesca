<div>
	<strong>Usuario</strong><br>
	<input name="nombre" id="usuario" type="text" size="24" maxlength="15" onkeypress="javascript: buscarInfoEnter(event, 'buscarUsuario');"/><br>
	<strong>Contrase&ntilde;a</strong><br>
	<input name="clave" id="clave" type="password" size="24" maxlength="15" onkeypress="javascript: buscarInfoEnter(event, 'buscarUsuario');"/><br><br>
	<input class="button" value="Ingresar" type="button" onclick="validar_usuario();"/><br>
    <font id="mensaje" style="color: #C00;"></font>
    <br><br>
</div>