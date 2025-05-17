<?php
include_once("modelo/Usuario.php");
session_start();

$sErr = "";
$sNom = "";
$sRol = "";

if (isset($_SESSION["usuario"])) {
	$sNom = isset($_SESSION["nombre"]) ? $_SESSION["nombre"] : "Usuario sin nombre";
	$sRol = $_SESSION["rol"];
} else {
	$sErr = "Debe iniciar sesión primero";
}

if ($sErr == "") {
	include_once("cabecera.html");
	include_once("menu.php");
	include_once("aside.html");
} else {
	header("Location: error.php?sError=" . urlencode($sErr));
	exit();
}
?>
<section class="principal">
	<h1>Ingresaste como: <?php 
			echo ($sRol == "1") ? "Administrador" : 
			     (($sRol == "2") ? "Visualizador" : "Desconocido");
		?> </h1>
	<h3>Usuario: 
	<?php echo htmlspecialchars($sNom); ?>
	</h3>
</section>
<?php
include_once("pie.html");
?>
