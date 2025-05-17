<?php
include_once("cabecera.html");
include_once("menu.php");
include_once("aside.html");
?>
        <section>
		<form id="frm" method="post" action="login.php" class="login-form">
	<h2>Iniciar Sesión</h2>
	
	<label for="usuario">Usuario</label>
	<input type="text" id="usuario" name="txtUsuario" required />

	<label for="contrasena">Contraseña</label>
	<input type="password" id="contrasena" name="txtContrasena" required />

	<input type="submit" value="Ingresar" />
</form>

</section>

<?php
include_once("pie.html");
?>