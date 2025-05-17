<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin tÍtulo</title>
<!---<script src="script.js"></script>--->
</head>

<body>

<?php 


$oMysql = new mysqli("localhost", "root", "", "agenda");
 // $conexion = pg_connect("host=localhost port=5432 user=nombreUsuario password=passwordUsuario dbname=nomBD", PGSQL_CONNECT_FORCE_NEW);
// $conexion = pg_connect("host=localhost dbname=BASE_DE_DATOS user=USUARIO password=CONTRASEÑA");		

$Query= "INSERT INTO contactos VALUES ('".$_POST["Nombre"]."','".$_POST["Direccion"]."','".$_POST["Telefono"]."','".$_POST["Email"]."')";
          
		  //$oMysql->query    seria como Objeto.metodo
$Result = $oMysql->query( $Query );  // se lanza la consulta

if($Result!=null){
	echo '<script src= "script-ok.js"></script>';
}

else{
	echo '<script src= "script-error.js"></script>';
}

	 
   ?>

</body>
</html>
