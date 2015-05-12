<a name="TemplateInfo"></a>
	<h2>ETAR de Pesca</h2>
    <table width="520" cellpadding="0" cellspacing="0" border="0">
	<tr>
    	<td valign="top" align="justify">
        Bienvenidos al sitio web oficial de la Escuela Técnica Agropecuaria Robinsoniana de Pesca (ETAR de Pesca). A través de ella esperamos mantener una constante comunicación con los integrantes de la comunidad etariana, egresados y personas particulares que de una u otra forma harán aportes en beneficio de los procesos de formación y de desarrollo de actividades de los miembros que hacen vida en esa comunidad educativa. Recuerda que:<br><br>
	<p align="center" style="color:#06C"><strong>"Trabajando unidos, Institución-Comunidad, lograremos rescatar nuestros valores y obtendremos una mejor calidad de vida"</strong></p><br>
    Para nosotros es de vital importancia estar en constante comunicación con la comunidad etariana, por eso te invitamos a que nos:
	<h3 style="color: #06C;">Envíes tu comentario</h3>
	<form method="get" action="#">			
	<p>		
		<label>Nombre</label>
		<input name="dname" id="txt_nombre" placeholder="Escriba su Nombre" type="text" size="30" maxlength="30"/>
		<label>Email</label>
		<input name="demail" id="txt_email" placeholder="Escriba su Email" onBlur="javascript: validarEmail(this.value, id);" type="text" size="30" maxlength="40"/>
		<label>Comentario</label>
		<textarea rows="3" id="txt_comentario" cols="5" placeholder="Escriba su Comentario"></textarea>
		<br />	
		<input class="button" type="button" onclick="registrar_comentario();" value="Enviar"/>		
	</p>		
	</form>
    </td></tr></table>