<?php 
//Busca registro  a través del nombre elegido
$nombreBuscar=$_GET["Nombre"];
$oMysql = new mysqli("localhost", "root", "", "agenda");
$Query="select * from contactos WHERE nombre = '".$nombreBuscar."'";
$Result = $oMysql->query( $Query );

if($Result==null)
   	print("No se  encontra el registro");
else{
      $row =$Result->fetch_array();
  	  $direccion=$row["direccion"];
	  $telefono=$row["telefono"];
	  $email=$row["email"];
	}
?>
